<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    // Display the wishlist items for the logged-in user
    public function index()
    {
        $wishlistItems = Wishlist::where('user_id', Auth::id())->with('product')->get();
        return view('wishlist.index', compact('wishlistItems'));
    }

    // Add product to wishlist
    public function addToWishlist(Request $request)
    {
        $wishlist = Wishlist::firstOrCreate([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        if (!$wishlist->wasRecentlyCreated) {
            return redirect()->back()->with('info', 'Product is already in your wishlist');
        }

        return redirect()->back()->with('success', 'Product added to wishlist');
    }

    // Remove product from wishlist
    public function removeFromWishlist($id)
    {
        $wishlistItem = Wishlist::where('id', $id)->where('user_id', Auth::id())->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('success', 'Product removed from wishlist');
        }

        return redirect()->back()->with('error', 'Product not found in wishlist');
    }
}
