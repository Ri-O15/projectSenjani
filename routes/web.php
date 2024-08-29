<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

// Rute untuk menampilkan detail produk
// Route::get('/{city}/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/solo', [ProductController::class, 'showSolo'])->name('products.showSolo');
Route::get('/surabaya', [ProductController::class, 'showSurabaya'])->name('products.showSurabaya');
Route::get('/malang', [ProductController::class, 'showMalang'])->name('products.showMalang');
Route::get('/yogyakarta', [ProductController::class, 'showYogyakarta'])->name('products.showYogyakarta');
Route::get('/semarang', [ProductController::class, 'showSemarang'])->name('products.showSemarang');

Route::get('/{city}/{key}', [ProductController::class, 'show'])->name('product.detail');

