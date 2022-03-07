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
Route::resource('class-room', \App\Http\Controllers\ClassRoomController::class);
Route::resource('program-level', \App\Http\Controllers\ProgramLevelController::class);
Route::get('/program-level-list', [\App\Http\Controllers\ProgramLevelController::class, 'showData'])->name('program-level.list');
//Route::get('class-room/{class_room}/edit',[\App\Http\Controllers\ClassRoomController::class, 'editData'])->name('class-room.edit');
Route::get('/class-room-list', [\App\Http\Controllers\ClassRoomController::class, 'showData'])->name('class-room.list');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

