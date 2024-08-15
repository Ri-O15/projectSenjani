<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($city, $slug)
    {
        // Simulasi data produk (gantilah dengan data dari database jika tersedia)
        $products = [
            'basic-tee-black' => [
                'name' => 'Basic Tee', 
                'price' => 30, 
                'color' => 'Black', 
                'image' => 'img/AssetSenjani/11.Snack.jpg'
            ],
            'basic-tee-black-2' => [
                'name' => 'Basic Tee', 
                'price' => 25, 
                'color' => 'Black', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg'
            ]
        ];

        $product = $products[$slug] ?? null;

        if (!$product) {
            abort(404); // Tampilkan halaman 404 jika produk tidak ditemukan
        }

        return view('form', [
             'city' => $city,
             'product' => $product
        ]); // Render view 'index.blade.php'
    }
}

