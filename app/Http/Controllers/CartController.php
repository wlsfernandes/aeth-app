<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        $cart = session('cart', []); // Retrieve the cart from the session
        $id = $request->input('id');
        $quantity = (int) $request->input('quantity'); // Ensure quantity is an integer

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        // Update the item quantity in the cart
        $cart[$id]['quantity'] = max(1, $quantity); // Ensure quantity is at least 1

        // Save the updated cart back to the session
        session(['cart' => $cart]);

        // Calculate the updated subtotal for the item
        $itemSubtotal = $cart[$id]['price'] * $cart[$id]['quantity'];

        // Calculate the cart subtotal and total
        $cartSubtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $cartTotal = $cartSubtotal; // Include additional charges or discounts if necessary

        return response()->json([
            'success' => true,
            'itemSubtotal' => number_format($itemSubtotal, 2),
            'cartSubtotal' => number_format($cartSubtotal, 2),
            'cartTotal' => number_format($cartTotal, 2),
        ]);
    }

    public function removeItem(Request $request)
    {
        $cart = session('cart', []); // Assuming the cart is stored in the session
        $id = $request->input('id');

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        // Remove the item
        unset($cart[$id]);

        // Save the updated cart back to the session
        session(['cart' => $cart]);

        // Calculate new subtotals and totals
        $cartSubtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $cartTotal = $cartSubtotal; // Add additional calculations for discounts if needed

        return response()->json([
            'success' => true,
            'cartSubtotal' => $cartSubtotal,
            'cartTotal' => $cartTotal,
        ]);
    }


}
