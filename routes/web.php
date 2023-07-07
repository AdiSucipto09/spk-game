<?php

use App\Http\Controllers\gameController;
use App\Http\Controllers\alternatifController;
use App\Http\Controllers\hitungController;
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
    return view('main.home');
});

Route::get('/blog', function () {
    return view('main.blog');
});

Route::get('/games', function () {
    return view('main.games');
});



Route::get('/admin', function () {
    return view('admin');
});


// Route::get('/addproduct', function () {
//     return view('addproduct');
// });

// Route::get('/product', function () {
//     return view('product');
// });


Route::resource('/product', gameController::class);

Route::resource('/alternatif', alternatifController::class);

Route::get('/spk', [hitungController::class, 'hitung']);

