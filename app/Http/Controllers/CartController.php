<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cartItems', 'product'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        if (!$product || $product->stock <= 0) {
            return redirect()->back()->with('error', 'Product is out of stock');
        }

        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('product_id', $request->product_id)
                        ->first();

        if ($cartItem) {
            if ($cartItem->quantity < $product->stock) {
                $cartItem->increment('quantity');
            } else {
                return redirect()->back()->with('error', 'Not enough stock available');
            }
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function update(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $product = Product::findOrFail($cartItem->product_id);

        if ($request->quantity > $product->stock) {
            return back()->with('error', 'Not enough stock available');
        }

        $cartItem->update([
            'quantity' => $request->quantity
        ]);

        return back()->with('success', 'Cart updated');
    }

    public function removeFromCart($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->back()->with('success', 'Product removed from cart');
    }
}
