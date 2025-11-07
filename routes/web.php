<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TransactionController;
// use App\Http\Controllers\TransactionDetailsController;
// use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
// use App\Http\Controllers\NameController;
// use App\Models\Transaction;
// use App\Models\TransactionDetail;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::resource('item', ItemController::class);
// Route::resource('transaction', TransactionController::class);
// Route::resource('transactiondetail', TransactionDetailsController::class);