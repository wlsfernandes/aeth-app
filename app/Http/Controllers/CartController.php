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
                'weight' => $product->weight,
                'image' => $product->image,
            ];
        }
        // Calculate the total amount
        $totalAmount = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        
        // Calculate the total weight
        $totalWeight = array_sum(array_map(function ($item) {
            return $item['weight'] * $item['quantity'];
        }, $cart));
        
        session()->put('cart', $cart);
        session()->put('cart_total', $totalAmount);
        session()->put('cart_total_weight', $totalWeight);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        $cart = session('cart', []);
        $id = $request->input('id');
        $quantity = (int) $request->input('quantity');

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        $cart[$id]['quantity'] = max(1, $quantity);
        session(['cart' => $cart]);

        // Calculate the updated subtotal for the item
        $itemSubtotal = $cart[$id]['price'] * $cart[$id]['quantity'];

        // Calculate the cart subtotal and total
        $cartSubtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Recalculate the total amount
        $totalAmount = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Calculate the total weight
        $totalWeight = array_sum(array_map(function ($item) {
            return $item['weight'] * $item['quantity'];
        }, $cart));


        session()->put('cart_total', $totalAmount);
        session()->put('cart_total_weight', $totalWeight);

        return response()->json([
            'success' => true,
            'itemSubtotal' => number_format($itemSubtotal, 2),
            'cartSubtotal' => number_format($cartSubtotal, 2),
            'cartTotal' => number_format($totalAmount, 2),
            'cartTotalWeight' => number_format($totalWeight, 2),
        ]);
    }

    public function removeItem(Request $request)
    {
        $cart = session('cart', []);
        $id = $request->input('id');

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        unset($cart[$id]);
        session(['cart' => $cart]);

        // Recalculate the total amount
        $totalAmount = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Calculate the total weight
        $totalWeight = array_sum(array_map(function ($item) {
            return $item['weight'] * $item['quantity'];
        }, $cart));


        session()->put('cart_total', $totalAmount);
        session()->put('cart_total_weight', $totalWeight);

        return response()->json([
            'success' => true,
            'cartTotal' => $totalAmount,
            'cart_total_weight' => $totalWeight,
        ]);
    }

}
