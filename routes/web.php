<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
Route::resource('products', ProductController::class);

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');


Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.update');
Route::get('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


