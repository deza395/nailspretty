<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;


Route::get('/', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('users',UserController::class)->only(['index','update','edit'])->middleware('can:admin.home')->names('admin.users');
Route::resource('categories',CategoryController::class)->middleware('can:admin.home')->names('admin.categories');
Route::resource('services', ServiceController::class)->middleware('can:admin.home')->names('admin.services');
