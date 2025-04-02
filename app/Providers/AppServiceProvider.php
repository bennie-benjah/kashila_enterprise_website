<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $wishlistCount = Wishlist::where('user_id', $user->id)->count();
                $cartItems = Cart::where('user_id', $user->id)->get();
                $cartCount = $cartItems->count();
                $cartTotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
            } else {
                $wishlistCount = $cartCount = $cartTotal = 0;
            }

            $view->with(compact('wishlistCount', 'cartCount', 'cartTotal'));
        });
    }
}
