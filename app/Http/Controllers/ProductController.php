<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    
    public function bookstore()
    {
        $products = Product::where('stock', '>', 0)->paginate(6);
        $categorys = Category::all();
        return view('pages.bookstore', compact('products', 'categorys'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); 
        return view('pages.product_details', compact('product'));
    }

}
