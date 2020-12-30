<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\expoController;
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


Route::get('/exposants', [expoController::class, 'index']);


Route::get('/exposants/demande', [expoController::class, 'ask']);
Route::post('/exposants/demande', [expoController::class, 'store']);

Route::get('/about', [aboutController::class, 'index']);


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
