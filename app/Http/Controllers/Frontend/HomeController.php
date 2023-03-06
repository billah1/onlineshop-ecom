<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $categories = Category::where('is_active', 1)
        ->latest('id')
        ->limit(5)
        ->select(['id', 'title', 'category_image','slug'])
        ->get();

        return view('frontend.pages.home', compact(
            // 'testimonials',
            'categories',
            // 'products'
        ));

    }
}
