<?php

use App\Http\Controllers\APIs\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::get('/categories/{id}', [CategoriesController::class, 'show']);
    Route::post('/categories', [CategoriesController::class, 'store']);
    Route::put('/categories/{id}', [CategoriesController::class, 'update']);
    Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);
});
