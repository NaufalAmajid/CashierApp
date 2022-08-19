<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/products-list', [ProductController::class, 'index'])->name('product');

Route::group(['prefix' => 'product'], function () {
    Route::get('/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
});

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');

Route::group(['prefix' => 'user'], function () {
    Route::get('/list', [UserController::class, 'index'])->name('user.list');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
});

Route::group(['prefix' => 'trade'], function () {
    Route::get('/list', [TradeController::class, 'index'])->name('trade.list');
    Route::get('/create', [TradeController::class, 'create'])->name('trade.create');
});

Route::get('/', function() {
    return view('authentication.login');
});
