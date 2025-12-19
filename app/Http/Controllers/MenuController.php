<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MenuController extends Controller
{
    public function index()
    {
        // Get categories without cache for now to ensure fresh data
        // You can enable cache later for better performance
        $categories = Category::active()
            ->ordered()
            ->get();

        return view('index', compact('categories'));
    }
}
