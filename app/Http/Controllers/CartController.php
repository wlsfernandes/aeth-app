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
        $cart = session('cart', []); // Assuming the cart is stored in the session
        $id = $request->input('id');
        $quantity = $request->input('quantity');

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        // Update the quantity
        $cart[$id]['quantity'] = $quantity;

        // Save the updated cart back to the session
        session(['cart' => $cart]);

        // Calculate subtotals and totals
        $itemSubtotal = $cart[$id]['price'] * $cart[$id]['quantity'];
        $cartSubtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $cartTotal = $cartSubtotal; // Add additional calculations for discounts if needed

        return response()->json([
            'success' => true,
            'itemSubtotal' => $itemSubtotal,
            'cartSubtotal' => $cartSubtotal,
            'cartTotal' => $cartTotal,
        ]);
    }


}
