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

    public function bookstore(Request $request)
    {

        $query = $request->input('search-field');

        $productsQuery = Product::where('stock', '>', 0);

        if ($query) {
            // Split the search query into words and remove any extra spaces.
            $words = array_filter(array_map('trim', explode(' ', $query)));
            $productsQuery->where(function ($q) use ($words) {
                foreach ($words as $word) {
                    // Use ilike for case-insensitive search in PostgreSQL.
                    $q->orWhere('name', 'ilike', '%' . $word . '%');
                }
            });
        }

        // Log the final SQL query (before pagination)
        $querySql = $productsQuery->toSql();
        $queryBindings = $productsQuery->getBindings();

        $products = $productsQuery->paginate(12);
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
