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

Route::get('/', [IndexController::class, 'index'])->name("index");

Route::get('/fish', function () {
    return view('fish');
})->name("fish");

Route::get('/show/miura', function () {
    return view('show.miura');
})->name("miura");

Route::get('/show/kujuItimiya', function () {
    return view('show.kujuItimiya');
})->name("kujuItimiya");

