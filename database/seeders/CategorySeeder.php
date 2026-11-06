<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /** Les sous-menus du site, dans l'ordre d'affichage. */
    public const MENUS = [
        'boutique' => ['Robes de soirée', 'Robes blanches', 'Mode Femme', 'Ensembles femme', 'Mode Homme', 'Tenues Guinée', 'Beauté & soins'],
        'imprimerie' => ['Cachets', 'Cartes de visite', 'Casquettes brodées', 'Éventails personnalisés', 'Calendriers', 'Sacs Personnalisés'],
    ];

    public function run(): void
    {
        foreach (self::MENUS as $menu => $names) {
            foreach ($names as $i => $name) {
                Category::updateOrCreate(['slug' => Str::slug($name)], ['menu' => $menu, 'name' => $name, 'position' => $i + 1]);
            }
        }
    }
}
