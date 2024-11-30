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
        $product = Product::findOrFail($id); // Fetch the product or throw a 404 error

        return view('product.details', compact('product'));
    }

}
