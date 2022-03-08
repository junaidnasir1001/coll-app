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

// Teacher Routes
Route::resource('teacher', \App\Http\Controllers\TeacherController::class);
Route::get('/teacher-list', [\App\Http\Controllers\TeacherController::class, 'showData'])->name('teacher.list');


// Session Academic Routes
Route::resource('session-academic', \App\Http\Controllers\SessionAcademicController::class);
Route::get('/session-academic-list', [\App\Http\Controllers\SessionAcademicController::class, 'showData'])->name('session-academic.list');

// Discipline Routes
Route::resource('discipline', \App\Http\Controllers\DisciplineController::class);
Route::get('/discipline-list', [\App\Http\Controllers\DisciplineController::class, 'showData'])->name('discipline.list');


// Semester Routes
Route::resource('semester', \App\Http\Controllers\SemesterController::class);
Route::get('/semester-list', [\App\Http\Controllers\SemesterController::class, 'showData'])->name('semester.list');

Route::get('/add-status', function () {
    return view('admin.status.create');
});

// Subject Routes
Route::resource('subject', \App\Http\Controllers\SubjectController::class);
Route::get('/subject-list', [\App\Http\Controllers\SubjectController::class, 'showData'])->name('subject.list');



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

