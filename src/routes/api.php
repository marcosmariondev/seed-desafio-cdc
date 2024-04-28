<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ShoppingCartController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\StateController;
use Illuminate\Support\Facades\Route;

Route::prefix('authors')->group(function () {
    Route::post('', [AuthorController::class, 'store']);
});
Route::prefix('categories')->group(function () {
    Route::post('', [CategoryController::class, 'store']);
});
Route::prefix('books')->group(function () {
    Route::post('', [BookController::class, 'store']);
    Route::get('', [BookController::class, 'index']);
    Route::get('/{book}', [BookController::class, 'show']);
});

Route::prefix('states')->group(function () {
    Route::post('', [StateController::class, 'store']);
});
Route::prefix('countries')->group(function () {
    Route::post('', [CountryController::class, 'store']);
});

Route::prefix('shopping-carts')->group(function () {
    Route::get('', [ShoppingCartController::class, 'index']);
    Route::post('', [ShoppingCartController::class, 'clientStep']);
    Route::put('/{shoppingCart}/paymentStep', [ShoppingCartController::class, 'paymentStep']);
});
