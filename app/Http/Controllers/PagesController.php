<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        if(!request()->has('search')) {
            $products = Product::all();
        }
        // $categories = Category::where('name', 'like', '%' . $request->search . '%')
        //             ->orWhere('slug', 'like', '%' . $request->search . '%')
        //             ->orWhere('description', 'like', '%' . $request->search . '%')
        //             ->get();
        $categories = Category::all();
        $products = Product::where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%')
                    ->get();
        return view('pages.index', compact('products', 'categories'));
    }

    public function category($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->get();

        return view('pages.index', compact('products', 'categories'));
    }
}
