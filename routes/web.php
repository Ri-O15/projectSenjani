<?php

use Illuminate\Support\Facades\Route;

// Redirect root route to /home
Route::get('/', function () {
    return redirect('/malang');
});

Route::get('/malang', function () {
    return view('home');
});


Route::get('/surabaya', function () {
    return view('surabaya');
});
