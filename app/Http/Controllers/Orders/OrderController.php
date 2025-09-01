<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddToBasketRequest;
use App\Http\Requests\CreateOrderRequest;
use App\Services\Server\ProductService;
use Illuminate\Http\Request;

class OrderController extends Controller {

    public function addToBasket(AddToBasketRequest $request) {
        $validated = $request->validated();
        
        // Store cart data securely with session regeneration for security
        $request->session()->regenerate(true);
        $request->session()->put('cart', [
            'product_id' => $validated['product_id'], 
            'count' => $validated['count'],
            'added_at' => now()->toISOString(),
        ]);

        return redirect('cart')->with('success', 'Product added to cart successfully.');
    }

    public function showCart(Request $request) {
        $cart = $request->session()->get('cart');
        $product = null;

        if ($cart && isset($cart['product_id'])) {
            try {
                $products = app(ProductService::class)->product($cart['product_id']);
                $product = $products[0] ?? null;
            } catch (\Exception $e) {
                \Log::warning('Failed to fetch product for cart', [
                    'product_id' => $cart['product_id'],
                    'error' => $e->getMessage(),
                ]);
                
                // Clear invalid cart data
                $request->session()->forget('cart');
                $cart = null;
            }
        }

        return view('pages.cart', [
            'product' => $product,
            'cart'    => $cart,
        ]);
    }

}
