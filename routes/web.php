<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::resource('/', homeController::class);
Route::resource('/about', aboutController::class);
Route::resource('/projects', projectsController::class);
route::resource('/contact',contactController::class);