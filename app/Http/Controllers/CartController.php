<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

/**
 * Class CartController
 *
 * Handles shopping cart functionality including adding, updating, and removing items.
 *
 * @package App\Http\Controllers
 */
class CartController extends Controller
{
    /**
     * CartController constructor.
     *
     * Initializes the cart session and provides cart count data to all views.
     */
    public function __construct()
    {
        view()->composer('*', function ($view) {
            $cart = session('cart', []);
            $cartCount = array_sum(array_column($cart, 'quantity'));
            $view->with('cartCount', $cartCount);
        });
    }

    /**
     * Display the cart page.
     *
     * @return View
     */
    public function showCart(): View
    {
        $cart = session()->get('cart', []);
        $cartCount = session()->get('cart_count', 0);
        $cartTotal = session()->get('cart_total', 0);

        return view('pages.cart', compact('cart', 'cartCount', 'cartTotal'));
    }

    /**
     * Add a product to the cart.
     *
     * @param Request $request
     * @param int $id Product ID
     * @return JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function add(Request $request, int $id)
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
                'weight' => $product->weight ?? 0.1,
                'image' => $product->image,
            ];
        }

        // Store updated cart in session
        session()->put('cart', $cart);

        // Update session totals
        $cartCount = array_sum(array_column($cart, 'quantity'));
        session()->put('cart_count', $cartCount);

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

    /**
     * Update the quantity of a product in the cart.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function updateCart(Request $request): JsonResponse
    {
        $cart = session('cart', []);
        $id = $request->input('id');
        $quantity = (int) $request->input('quantity');

        if (!isset($cart[$id])) {
            return response()->json(['success' => false, 'message' => 'Item not found in cart.']);
        }

        // Update quantity (ensure at least 1)
        $cart[$id]['quantity'] = max(1, $quantity);
        session(['cart' => $cart]);

        // Recalculate totals
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        $totalWeight = array_sum(array_map(fn($item) => ($item['weight'] ?? 0.1) * $item['quantity'], $cart));

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

    /**
     * Remove an item from the cart.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function removeItem(Request $request): JsonResponse
    {
        $cart = session('cart', []);
        $id = $request->input('id');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // If cart is empty, clear all related session values
        if (empty($cart)) {
            session()->forget(['cart', 'cart_total', 'cart_total_weight', 'cart_count', 'amount', 'weight']);
            return response()->json([
                'success' => true,
                'cartTotal' => 0,
                'cartCount' => 0
            ]);
        }

        // Recalculate cart count and total
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        $totalWeight = array_sum(array_map(fn($item) => ($item['weight'] ?? 0.1) * $item['quantity'], $cart));

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
