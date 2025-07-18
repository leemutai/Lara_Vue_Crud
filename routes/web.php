<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth','verified'])->group(function(){
    Route::get('/products', [ProductController::class,'index'])->name('products.index');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';