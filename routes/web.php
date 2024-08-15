<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FormController::class, 'index'])->name('form');
Route::post('/store', [FormController::class, 'store'])->name('store');
Route::post('/submitForm', [FormController::class, 'submitForm'])->name('submitForm');
//Route to goToPage
Route::get('/page/{page}', [FormController::class, 'goToPage'])->name('goToPage');