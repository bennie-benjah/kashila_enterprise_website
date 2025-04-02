<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Product;

// Public routes


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Smart dashboard redirect
    Route::get('/dashboard', function () {
        return Auth::user()->user_type === 'admin'
            ? redirect()->route('admin.index')
            : redirect()->route('dashboard.user');
    })->name('admin/dashboard');
});

// User routes
Route::prefix('user')->middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Shopping features
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
});
Route::get('/products/random', [HomeController::class, 'displayRandomProducts']);
// Admin routes
Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    // Add more admin-specific routes here
    Route::post('/admin/categories', [AdminController::class, 'store'])->name('categories.store');
    Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::delete('/products/{id}', [AdminController::class, 'destroy'])->name('products.destroy');
    Route::delete('/category/{id}', [AdminController::class, 'destroyCategory'])->name('category.destroy');
    Route::put('/categories/{category}', [AdminController::class, 'updateCategory'])->name('categories.update');
Route::put('/admin/products/{product}', [AdminController::class, 'updateProduct'])->name('admin.products.update');

});
require __DIR__.'/auth.php';
