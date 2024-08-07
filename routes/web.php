<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ClaseController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('profesores', ProfesorController::class);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('clases', ClaseController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
