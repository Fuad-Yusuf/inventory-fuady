<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\product_historiesController;

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

Route::get('/product-histories-view', [ProductHistoryController::class, 'showProductHistoriesView'] );
    return view('welcome');

