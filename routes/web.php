<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/home', [BlogController::class, 'home']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/about', [BlogController::class, 'about']);
// Route::get('/beranda', function () 
//     return view('beranda');
// });



// ///ini adalah rute menuju halamandua
// Route::get('/halamandua', function () {
//     return view('halamandua');
// });
// ///halamandua berakhir disini

// //ini adalah rute menuju halaman tiga
// Route::get('/tentangkami', function () {
//     return view('tentangkami');
// });

// Route::get('/fitur', function () {
//     return view('fitur', ['nama' => 'Selamat Datang di Fitur Kami']);
// });

// // harga produk
// Route::get('/product/{id}', function ($id) {
//     $product = [
//         'id' => $id,
//         'barang' => 'Sepatu',
//         'harga' => 200000
//     ];
//     return view('product', ['product' => $product]);
// });
