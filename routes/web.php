<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/contact', function () {
    return view('contact');


});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});

    Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send']);


Route::get('/shop', [ShopController::class, 'index']);

Route::post('/subscribe', [NewsletterController::class, 'store']);

Route::view('/privacy-policy', 'privacy');



