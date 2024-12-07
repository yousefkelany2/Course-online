<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dash\AdminController;
use App\Http\Controllers\dash\CourseController;
use App\Http\Controllers\dash\TeacherController;
use App\Http\Controllers\dash\CategoryController;

Route::resource("admin",AdminController::class);
Route::resource("teacher",TeacherController::class);
Route::resource("course",CourseController::class);
Route::resource("category",CategoryController::class);
