<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 // Class Room Routes
Route::resource('class-room', \App\Http\Controllers\ClassRoomController::class);
Route::get('/class-room-list', [\App\Http\Controllers\ClassRoomController::class, 'showData'])->name('class-room.list');

// Program Level Routes
Route::resource('program-level', \App\Http\Controllers\ProgramLevelController::class);
Route::get('/program-level-list', [\App\Http\Controllers\ProgramLevelController::class, 'showData'])->name('program-level.list');

// Department Routes
Route::resource('department', \App\Http\Controllers\DepartmentController::class);
Route::get('/department-list', [\App\Http\Controllers\DepartmentController::class, 'showData'])->name('department.list');

// Dashboard Routes
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

