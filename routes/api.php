<?php

use App\Http\Controllers\Api\{
    CourseController,
    ModuloController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::get('/courses/{id}/modules', [ModuloController::class, 'index']);
Route::get('/courses/{id}/modules/{id}', [ModuloController::class, 'show']);

Route::get('/', function () {
    return response()->json([
        'sucess' => true
    ]);
});
