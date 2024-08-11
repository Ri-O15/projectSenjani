<?php

use Illuminate\Support\Facades\Route;

// Redirect root route to /home
Route::get('/', function () {
    return redirect('/malang');
});

Route::get('/malang', function () {
    return view('malang', ['title' => 'Malang']);
});

Route::get('/surabaya', function () {
    return view('surabaya', ['title' => 'Surabaya']);
});

Route::get('/yogyakarta', function () {
    return view('yogyakarta', ['title' => 'Yogyakarta']);
});

Route::get('/solo', function () {
    return view('solo', ['title' => 'Solo']);
});

Route::get('/semarang', function () {
    return view('semarang', ['title' => 'Semarang']);
});
