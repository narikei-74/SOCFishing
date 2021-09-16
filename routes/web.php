<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

//トップページ
Route::get('/', [IndexController::class, 'index'])->name("index");
// Route::post('/', [IndexController::class, 'search'])->name("search");

// 釣り場詳細ページ
Route::get('/fish', function () {
    return view('fish');
})->name("fish");

// 三浦海岸
Route::get('/show/miura', function () {
    return view('show.miura');
})->name("miura");

// 九十九里浜（一宮）
Route::get('/show/kujuItimiya', function () {
    return view('show.kujuItimiya');
})->name("kujuItimiya");

