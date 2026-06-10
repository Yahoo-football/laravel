<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::get('/movies',[MovieController::class,'index'])->name('Movies.index');


Route::get('/categories', [CategoriesController::class, 'index'])->name('Categories.index');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('Categories.create');
Route::post('/categories/store', [CategoriesController::class, 'store'])->name('Categories.store');
Route::get('/categories/{id}', [CategoriesController::class, 'edit'])->name('Categories.edit');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('Categories.update');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('Categories.destroy');

Route::get('/customers',[CustomerController::class,'index'])->name('Customers.index');
Route::get('/customers/create',[CustomerController::class,'create'])->name('Customers.create');
Route::post('/customers/store',[CustomerController::class,'store'])->name('Customers.store');
Route::delete('/customers/{id}',[CustomerController::class,'destroy'])->name('Customers.destroy');