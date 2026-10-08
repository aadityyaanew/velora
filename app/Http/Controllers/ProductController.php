<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of active products.
     */
    public function index(Request $request): View
    {
        $category = $request->query('category');
        $search = $request->query('search');

        $query = Product::active();

        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('size', 'like', "%{$search}%")
                    ->orWhere('tagline', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $products = $query->orderBy('sort_order', 'asc')->orderBy('id', 'asc')->paginate(12)->withQueryString();

        $categories = Product::active()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        $featuredProducts = Product::active()
            ->featured()
            ->orderBy('sort_order', 'asc')
            ->take(3)
            ->get();

        return view('products.index', compact('products', 'categories', 'category', 'search', 'featuredProducts'));
    }

    /**
     * Display details for a specific product.
     */
    public function show(string $slug): View
    {
        $product = Product::active()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedProducts = Product::active()
            ->where('id', '!=', $product->id)
            ->where(function ($q) use ($product) {
                $q->where('category', $product->category);
            })
            ->take(3)
            ->get();

        if ($relatedProducts->count() < 3) {
            $fallback = Product::active()
                ->where('id', '!=', $product->id)
                ->whereNotIn('id', $relatedProducts->pluck('id'))
                ->take(3 - $relatedProducts->count())
                ->get();
            $relatedProducts = $relatedProducts->concat($fallback);
        }

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
