<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function bookstore()
    {
        $products = Product::paginate(9);
        return view('pages.bookstore', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); 
        return view('pages.product_details', compact('product'));
    }

}
