<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AccountController;
use \App\Http\Controllers\CvController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/save', [CvController::class, 'save']);


Route::resource('/resumes', AccountController::class);
Route::resource('/cv', CvController::class);

Route::get('/test', [CvController::class, 'test']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
