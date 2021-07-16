<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('/', [HomeController::class,'index'])->name('admin.home');
Route::resource('categories',CategoryController::class)->names('admin.categories');
Route::resource('services', ServiceController::class)->names('admin.services');
