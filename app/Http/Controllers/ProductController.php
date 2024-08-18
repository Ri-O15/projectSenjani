<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($city, $slug)
    {
        // Simulasi data produk (gantilah dengan data dari database jika tersedia)
        $products = [
            'tanpa' => [
                'name' => 'Tanpa Nasi', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/1.Tanpa.jpg'
            ],
            '' => [
                'name' => 'Nasi Putih', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/2.Tanpa.jpg'
            ],
            'merah' => [
                'name' => 'Nasi Merah', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/3.Merah.jpg'
            ],
            'family' => [
                'name' => 'Family', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/4.Family.jpg'
            ],
            'healthy' => [
                'name' => 'Healthy', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/5.Healthy.jpg'
            ],
            'advance' => [
                'name' => 'Advance', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/6.Advance.jpg'
            ],
            'kids bento' => [
                'name' => 'Kids Bento', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/8.Kids Bento.jpg'
            ],
            'bento box' => [
                'name' => 'Bento Box', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/7.Bento Box.jpg'
            ],
            'tumini' => [
                'name' => 'Nasi Tumini', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/9.Tuminijpg'
            ],
            'tumpeng' => [
                'name' => 'Nasi Tumpeng', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/10.Tumpeng.jpg'
            ],
            'snack' => [
                'name' => 'Snack', 
                'price' => 10000, 
                'qty' => '100000', 
                'image' => 'img/AssetSenjani/11.Snack.jpg'
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

