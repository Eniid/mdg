<?php

use App\Http\Controllers\indexController;
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

Route::get('/', [indexController::class, 'index']);


Route::get('/exposants', function () {
    return view('exposant');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/editions_precedents', function () {
    return view('last');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/buy', function () {
    return view('buy');
});

Route::get('/devenir_exposant', function () {
    return view('new_exp');
});
