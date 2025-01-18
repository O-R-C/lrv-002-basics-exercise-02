<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GroupController::class, 'index']);

Route::resource('groups', App\Http\Controllers\GroupController::class);

Route::resource('students', App\Http\Controllers\StudentController::class);

Route::delete('/groups/{id}', [App\Http\Controllers\GroupController::class, 'destroy']);

Route::delete('/groups/{group}/students/{id}', [App\Http\Controllers\StudentController::class, 'destroy']);

Route::get('/groups/{group}/students/create', [App\Http\Controllers\StudentController::class, 'create']);

Route::get('/groups/{group}/students/{id}', [App\Http\Controllers\StudentController::class, 'show']);

Route::post('/groups/{group}/students', [App\Http\Controllers\StudentController::class, 'store']);
