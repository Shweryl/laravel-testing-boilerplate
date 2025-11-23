<?php

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

use Modules\Product\Http\Controllers\ProductController;
use Modules\Product\Http\Controllers\ProductTableController;

Route::prefix('product')->as('product.')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::get('/product-table', [ProductTableController::class, 'index'])->name('table');
});
