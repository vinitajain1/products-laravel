<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products/create', [ProductsController::class, 'create']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'delete']);
