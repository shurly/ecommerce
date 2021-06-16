<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

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

/**
 * Home
 */
Route::match(['get', 'post'], '/', [ProductController::class, 'index'])->name('home');

/**
 * Categories
 */
Route::match(['get', 'post'], '/category', [ProductController::class, 'category'])->name('category');
Route::match(['get', 'post'], '/{idCategory}/category', [ProductController::class, 'category'])->name('category.id');

/**
 * Shopping Cart
 */
Route::match(['get', 'post'], '/{idProduct}/cart/add', [ProductController::class, 'cartAdd'])->name('cart.add');
Route::match(['get', 'post'], '/cart', [ProductController::class, 'seeCart'])->name('see.cart');
Route::match(['get', 'post'], '/{indice}/delete/cart', [ProductController::class, 'deleteItemCart'])->name('delete.item.cart');
Route::post('/finish/cart', [ProductController::class, 'finishCart'])->name('finish.cart');
Route::match(['get', 'post'],'/my/shopping', [ProductController::class, 'myShopping'])->name('my.shopping');

/**
 * Client
 */
Route::match(['get', 'post'], '/register', [ClientController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/register/client', [ClientController::class, 'registerClient'])->name('register.client');

/**
 * User
 */
Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');



require __DIR__.'/auth.php';
