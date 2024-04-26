<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('author')->group(function () {
    Route::post('', [AuthorController::class, 'store'])->name("api.author.store");
});
Route::prefix('category')->group(function () {
    Route::post('', [CategoryController::class, 'store'])->name("api.category.store");
});
