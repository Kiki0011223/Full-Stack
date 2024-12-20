<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Selamat Datang di Laravel!';
});

Route::get('/user/{name}', function ($name) {
    return 'Halo, ' . $name;
});

Route::get('/view-halo', function () {
    return view('halo');
});

Route::get('/student/register', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/register', [StudentController::class, 'store'])->name('student.store');

Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update');