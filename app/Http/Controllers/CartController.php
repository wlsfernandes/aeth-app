<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
        view()->composer('*', function ($view) {
            $cart = session('cart', []);
            $cartCount = array_sum(array_column($cart, 'quantity'));
            $view->with('cartCount', $cartCount);
        });
    }

    public function showCart()
    {
        $cart = session()->get('cart', []);
        $cartCount = session()->get('cart_count', 0);
        $cartTotal = session()->get('cart_total', 0);

        return view('pages.cart', compact('cart', 'cartCount', 'cartTotal'));
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

        // Store updated cart in session
        session()->put('cart', $cart);

        // Store cart count in session
        $cartCount = array_sum(array_column($cart, 'quantity'));
        session()->put('cart_count', $cartCount);

        // Store total price in session
        $cartTotal = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        session()->put('cart_total', $cartTotal);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Product added to cart successfully!',
                'cartCount' => $cartCount
            ]);
        }

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

        // Update quantity
        $cart[$id]['quantity'] = max(1, $quantity);
        session(['cart' => $cart]);

        // Recalculate total amount and cart count
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        $totalWeight = array_sum(array_map(fn($item) => ($item['weight'] ?? 0) * $item['quantity'], $cart));

        session()->put('cart_total', $totalAmount);
        session()->put('cart_total_weight', $totalWeight);
        session()->put('cart_count', $cartCount);

        return response()->json([
            'success' => true,
            'itemSubtotal' => number_format($cart[$id]['price'] * $cart[$id]['quantity'], 2),
            'cartSubtotal' => number_format($totalAmount, 2),
            'cartTotal' => number_format($totalAmount, 2),
            'cartTotalWeight' => number_format($totalWeight, 2),
            'cartCount' => $cartCount
        ]);
    }


    public function removeItem(Request $request)
    {
        $cart = session('cart', []);
        $id = $request->input('id');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // ✅ Check if the cart is empty, then remove session values
        if (empty($cart)) {
            session()->forget(['cart', 'cart_total', 'cart_total_weight', 'cart_count', 'amount', 'weight']);
            return response()->json([
                'success' => true,
                'cartTotal' => 0,
                'cartCount' => 0
            ]);
        }

        // ✅ Recalculate cart count and total
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        $totalWeight = array_sum(array_map(fn($item) => ($item['weight'] ?? 0) * $item['quantity'], $cart));

        session()->put('cart_total', $totalAmount);
        session()->put('cart_total_weight', $totalWeight);
        session()->put('cart_count', $cartCount);

        return response()->json([
            'success' => true,
            'cartTotal' => number_format($totalAmount, 2),
            'cartCount' => $cartCount
        ]);
    }



}
