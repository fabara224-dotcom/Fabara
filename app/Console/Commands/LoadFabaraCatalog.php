<?php
namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use App\Support\CatalogImporter;
use Database\Seeders\CategorySeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LoadFabaraCatalog extends Command
{
    protected $signature = 'fabara:catalogue {--force : sans confirmation} {--garder : ajoute le catalogue sans supprimer les autres articles}';
    protected $description = 'Remplace le catalogue du site par le catalogue Fabara (database/seeders/fabara) : articles, photos, prix, promotions et tailles.';

    public function handle(): int
    {
        $csv = database_path('seeders/fabara/articles.csv');
        $keepOthers = (bool) $this->option('garder');

        if (! $this->option('force')) {
            $this->warn($keepOthers
                ? 'Le catalogue Fabara va être ajouté. Les autres articles sont conservés.'
                : 'Le catalogue du site va être REMPLACÉ : seuls les articles Fabara resteront. Une sauvegarde de la base est faite avant.');
            if (! $this->confirm('Continuer ?', true)) {
                return self::SUCCESS;
            }
        }

        // 1. Sauvegarde de la base avant toute modification
        $this->call('fabara:backup');

        // 2. Données de démonstration (articles, ventes, commandes… d'exemple)
        $this->call('fabara:clear-demo', ['--force' => true]);

        // 3. Sous-menus du catalogue
        $this->callSilently('db:seed', ['--class' => CategorySeeder::class, '--force' => true]);
        $keepSlugs = collect(CategorySeeder::MENUS)->flatten()->map(fn ($n) => Str::slug($n))->all();

        // 4. Articles qui ne font pas partie du catalogue Fabara
        if (! $keepOthers) {
            $names = $this->catalogueNames($csv);
            $others = Product::all()->reject(fn (Product $p) => in_array($p->name, $names, true));
            foreach ($others as $p) {
                if ($p->image) {
                    Storage::disk('public')->delete($p->image);
                }
                $p->delete(); // l'historique des ventes garde le nom et le prix de l'article
            }
            $this->info("Articles retirés : {$others->count()}");

            $removed = 0;
            foreach (Category::whereNotIn('slug', $keepSlugs)->get() as $c) {
                if (! $c->products()->exists()) {
                    $c->delete();
                    $removed++;
                }
            }
            $this->info("Sous-menus retirés : $removed");
        }

        // 5. Import du catalogue (les articles du même nom sont mis à jour, sans doublon)
        $imp = (new CatalogImporter(demo: false))->run($csv);
        foreach ($imp->errors as $e) {
            $this->warn($e);
        }
        $this->info("Catalogue Fabara : {$imp->created} articles créés, {$imp->updated} mis à jour.");

        return $imp->errors && ! ($imp->created + $imp->updated) ? self::FAILURE : self::SUCCESS;
    }

    /** @return string[] */
    private function catalogueNames(string $csv): array
    {
        $rows = \App\Support\TableReader::read($csv);
        array_shift($rows);
        return array_values(array_filter(array_map(fn ($r) => trim((string) ($r[1] ?? '')), $rows)));
    }
}
