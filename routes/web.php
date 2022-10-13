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
    return view('inlog');
});

Route::get('/home', 'App\Http\Controllers\home@index');
Route::get('/productController', 'App\Http\Controllers\product@index');
Route::get('/inlog', 'App\Http\Controllers\inlog@index');
Route::get('/create', 'App\Http\Controllers\create@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productController', [App\Http\Controllers\productController::class, 'index'])->name('productController');
