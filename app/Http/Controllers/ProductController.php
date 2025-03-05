<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Displays the bookstore page with available products.
     *
     * This method retrieves all products that have stock available and paginates them with
     * a limit of 6 products per page. It also retrieves all product categories.
     *
     * @return *\Illuminate\View\View Returns the bookstore view with products and categories.
     */

    public function bookstore()
    {
        $products = Product::where('stock', '>', 0)->paginate(6);
        $categorys = Category::all();
        return view('pages.bookstore', compact('products', 'categorys'));
    }
    /**
     * Displays the details of a specific product.
     *
     * This method retrieves a product by its ID. If the product is not found, it returns a 404 error.
     *
     * @param int $id The unique identifier of the product.
     * @return *\Illuminate\View\View Returns the product details view.
     *
     * @throws *\Illuminate\Database\Eloquent\ModelNotFoundException If the product is not found.
     */


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product_details', compact('product'));
    }

}
