<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/products', [ProductController::class, 'index']);
Route::post('/search', [ProductController::class, 'search']);
Route::get('/products/{id}', [ProductController::class, 'update']);
Route::post('/products/{id}/update', [ProductController::class, 'add']);
Route::post('/products/{id}/update', [ProductController::class, 'store']);
Route::get('/register', [ProductController::class, 'register']);
Route::post('/register', [ProductController::class, 'create']);
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy']);
//<form method="post" action="/products/{id}/update" enctype="multipart/form-data">