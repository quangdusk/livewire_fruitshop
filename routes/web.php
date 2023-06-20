<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/not-found', function () {
    return view('not-found');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/single-new', function () {
    return view('single-new');
});
Route::get('/single-product', function () {
    return view('single-product');
});