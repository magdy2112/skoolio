<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/export', [TeacherController::class,'export']);
Route::get('/test', [AdminController::class,'test']);
Route::get('/test1', [AdminController::class,'test']);



