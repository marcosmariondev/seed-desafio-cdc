<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('authors')->group(function () {
    Route::post('', [AuthorController::class, 'store'])->name("api.author.store");
});
Route::prefix('categories')->group(function () {
    Route::post('', [CategoryController::class, 'store'])->name("api.category.store");
});
Route::prefix('books')->group(function () {
    Route::post('', [BookController::class, 'store'])->name("api.category.store");
});
