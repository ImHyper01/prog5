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


Route::get('/create', function (){
    return view('create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productController', [App\Http\Controllers\productController::class, 'index'])->name('productController')->middleware('admin');
Route::get('/create', [App\Http\Controllers\productController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\productController::class, 'postCreate'])->name('create.post');
Route::get('/deleteProduct/{id}', [App\Http\Controllers\productController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/editProduct/{id}', [App\Http\Controllers\productController::class, 'editProduct'])->name('edit.product');
Route::post('/editProduct/{id}', [App\Http\Controllers\productController::class, 'postProduct'])->name('post.product');

