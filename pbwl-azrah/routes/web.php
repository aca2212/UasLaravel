<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pembeli', [App\Http\Controllers\pembeliController::class, 'index']);
Route::get('/pembeli/create', [App\Http\Controllers\pembeliController::class, 'create']);
Route::post('/pembeli', [App\Http\Controllers\pembeliController::class, 'store']);
Route::get('/pembeli/edit/{id}', [App\Http\Controllers\pembeliController::class, 'edit']);
Route::patch('/pembeli/{id}', [App\Http\Controllers\pembeliController::class, 'update']);
Route::delete('/pembeli/{id}', [App\Http\Controllers\pembeliController::class, 'destroy']);

Route::get('/produk', [App\Http\Controllers\produkController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\produkController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\produkController::class, 'store']);
Route::get('/produk/edit/{id}', [App\Http\Controllers\produkController::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\produkController::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\produkController::class, 'destroy']);

Route::get('/order', [App\Http\Controllers\orderController::class, 'index']);
Route::get('/order/create', [App\Http\Controllers\orderController::class, 'create']);
Route::post('/order', [App\Http\Controllers\orderController::class, 'store']);
Route::get('/order/edit/{id}', [App\Http\Controllers\orderController::class, 'edit']);
Route::patch('/order/{id}', [App\Http\Controllers\orderController::class, 'update']);
Route::delete('/order/{id}', [App\Http\Controllers\orderController::class, 'destroy']);
