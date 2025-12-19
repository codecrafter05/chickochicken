<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    public function show($category)
    {
        // Find category by slug
        $categoryModel = Category::where('slug', $category)
            ->active()
            ->firstOrFail();

        // Get all categories for sidebar
        $categories = Category::active()
            ->ordered()
            ->get();

        // Get products for this category
        $products = Product::where('category_id', $categoryModel->id)
            ->active()
            ->ordered()
            ->get();

        return view('page2', [
            'category' => $categoryModel,
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
