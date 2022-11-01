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
Route::get('/search', '\App\Http\Controllers\productController@search');
Route::get('/filter', '\App\Http\Controllers\productController@filter');


Route::get('/create', function (){
    return view('create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productController', [App\Http\Controllers\productController::class, 'index'])->name('productController');

Route::get('/create', [App\Http\Controllers\productController::class, 'create'])->name('create')->middleware('admin');
Route::post('/create', [App\Http\Controllers\productController::class, 'postCreate'])->name('create.post')->middleware('admin');

Route::get('/deleteProduct/{id}', [App\Http\Controllers\productController::class, 'deleteProduct'])->name('deleteProduct')->middleware('admin');

Route::get('/editProduct/{id}', [App\Http\Controllers\productController::class, 'editProduct'])->name('edit.products')->middleware('admin');
Route::post('/editProduct/{id}', [App\Http\Controllers\productController::class, 'postProduct'])->name('post.products')->middleware('admin');

Route::get('buy', [App\Http\Controllers\productController::class, 'buy'])->name('buy');

Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin')->middleware('admin');

Route::get('/status', [App\Http\Controllers\adminController::class, 'status'])->name('status')->middleware('admin');
