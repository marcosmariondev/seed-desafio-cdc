<?php

use App\Http\Controllers\Api\AuthorController;
use Illuminate\Support\Facades\Route;

Route::prefix('author')->group(function () {
    Route::post('', [AuthorController::class, 'store'])->name("api.author.store");
});
