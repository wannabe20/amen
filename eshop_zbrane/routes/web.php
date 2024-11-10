<?php

use App\Http\Controllers\GunController;
use App\Http\Controllers\KnifeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Routes for knives and guns
Route::get('/knives', [KnifeController::class, 'index']);
Route::get('/guns', [GunController::class, 'index']);

// Routes for accessories
Route::get('/accessories', [AccessoryController::class, 'index'])->name('accessories.index');
Route::get('/accessories/{id}', [AccessoryController::class, 'show'])->name('accessories.show');

// Routes for the shopping cart
Route::get('add-to-cart/{type}/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Checkout route
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

// Routes for other pages
Route::get('/equipment', function () {
    return view('equipment');
});
Route::get('/others', function () {
    return view('others');
});
