<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function home()
    {
        $categories = Category::withCount(['products' => fn ($q) => $q->where('is_active', true)])
            ->orderByRaw("CASE menu WHEN 'boutique' THEN 0 ELSE 1 END")->orderBy('position')->get();
        $active = Product::with('category')->where('is_active', true)->orderBy('id')->get();
        $in = fn (array $slugs) => $active->filter(fn ($p) => in_array($p->category?->slug, $slugs, true));

        $sections = [
            'femme' => $this->oneByModel($in(['robes-de-soiree', 'robes-blanches', 'mode-femme', 'ensembles-femme', 'tenues-guinee']))->take(6),
            'homme' => $this->oneByModel($in(['mode-homme']))->take(6),
            'beaute' => $this->oneByModel($in(['beaute-soins']))->take(6),
            'promos' => $this->oneByModel($active->filter(fn ($p) => $p->onSale()))->take(8),
            'impress' => $this->oneByModel($active->filter(fn ($p) => $p->category?->menu === 'imprimerie'))->take(6),
        ];
        $promoThumb = $sections['promos']->first()?->image_url;

        return view('site.home', compact('categories', 'sections', 'promoThumb'));
    }

    public function promotions()
    {
        $products = Product::with('category')->where('is_active', true)
            ->whereNotNull('old_price')->whereColumn('old_price', '>', 'price')->orderBy('id')->get();
        return view('site.promotions', compact('products'));
    }

    /** Un seul article par modèle (les couleurs d'un même modèle s'appellent « Modèle – Couleur »). */
    private function oneByModel(Collection $products): Collection
    {
        return $products->unique(fn ($p) => Str::before($p->name, ' – '))->values();
    }

    public function search(Request $r)
    {
        $term = trim((string) $r->query('q'));
        $products = collect();
        if (mb_strlen($term) >= 2) {
            $products = Product::with('category')->where('is_active', true)
                ->where(fn ($query) => $query->where('name', 'like', '%' . $term . '%')->orWhere('description', 'like', '%' . $term . '%'))
                ->orderBy('name')->limit(60)->get();
        }
        return view('site.search', compact('term', 'products'));
    }

    public function category(Request $r, string $menu, Category $category)
    {
        abort_unless($category->menu === $menu, 404);
        $siblings = Category::where('menu', $menu)->withCount(['products' => fn ($query) => $query->where('is_active', true)])->orderBy('position')->get();
        $q = $category->products()->with('category')->where('is_active', true);
        if ($s = trim((string) $r->query('q'))) {
            $q->where('name', 'like', '%' . $s . '%');
        }
        match ($r->query('tri')) {
            'prix_asc' => $q->orderBy('price'),
            'prix_desc' => $q->orderByDesc('price'),
            default => $q->latest(),
        };
        $products = $q->get();
        return view('site.category', compact('menu', 'category', 'products', 'siblings'));
    }

    public function product(Product $product)
    {
        abort_unless($product->is_active, 404);
        $product->load('category');
        $model = Str::before($product->name, ' – ');
        $variants = $model !== $product->name
            ? Product::where('is_active', true)->where('category_id', $product->category_id)->where('name', 'like', $model . ' – %')->orderBy('id')->get()
            : collect();
        $related = $this->oneByModel(Product::with('category')->where('is_active', true)->where('category_id', $product->category_id)
            ->where('name', 'not like', $model . '%')->orderBy('id')->get())->take(6);
        return view('site.product', compact('product', 'related', 'variants', 'model'));
    }
}
