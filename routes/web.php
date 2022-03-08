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
Route::get('/add-teacher', function () {
    return view('admin.teacher.create');
});

Route::get('/view-teacher', function () {
    return view('admin.teacher.view');
});


Route::get('/add-session', function () {
    return view('admin.session_academic.create');
});

Route::get('/add-discipline', function () {
    return view('admin.discipline.create');
});

Route::get('/add-year', function () {
    return view('admin.year.create');
});

Route::get('/add-status', function () {
    return view('admin.status.create');
});

Route::get('/add-subject', function () {
    return view('admin.subject.create');
});



 // Class Room Routes
Route::resource('class-room', \App\Http\Controllers\ClassRoomController::class);
Route::get('/class-room-list', [\App\Http\Controllers\ClassRoomController::class, 'showData'])->name('class-room.list');

// Program Level Routes
Route::resource('program-level', \App\Http\Controllers\ProgramLevelController::class);
Route::get('/program-level-list', [\App\Http\Controllers\ProgramLevelController::class, 'showData'])->name('program-level.list');

// Department Routes
Route::resource('department', \App\Http\Controllers\DepartmentController::class);
Route::get('/department-list', [\App\Http\Controllers\DepartmentController::class, 'showData'])->name('department.list');

// Designation Routes
Route::resource('designation', \App\Http\Controllers\DesignationController::class);
Route::get('/designation-list', [\App\Http\Controllers\DesignationController::class, 'showData'])->name('designation.list');

// Dashboard Routes
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

