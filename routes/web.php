<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'fumetti' => config('fumettiDb')
    ];

    return view('home', $data);
})->name('home');

Route::get('/prodotto/{index}/prodotto', function ($index) {

    $data = [
        'fumetti' => config('fumettiDb')[$index]
    ];
    // dd($data);
    return view('product', $data);
})->name('product');


