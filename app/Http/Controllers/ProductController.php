<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(?string $category = null) {

        $categories = ProductCategory::all();
        $products = Product::with(['categories', 'links'])
            ->when($category, function (Builder $query) use ($category) {
                $query->whereRelation('categories', 'slug', $category);
            })
            ->latest()
            ->paginate(15);

        return Inertia::render('Product', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
