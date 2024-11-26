<?php

// use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// require base_path('routes/Students_api/student.php');
Route::controller( StudentController::class)
->prefix('student')->group(function(){
    Route::get('/', 'home')->name('student');
});
