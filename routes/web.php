<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['register' => false]);

//Middleware Grouping auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/detail/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('detail');
    Route::get('/confirm/{id}', [App\Http\Controllers\HomeController::class, 'confirm'])->name('confirm');
    Route::put('/complete/{id}', [App\Http\Controllers\HomeController::class, 'complete'])->name('complete');
    Route::put('/uncomplete/{id}', [App\Http\Controllers\HomeController::class, 'uncomplete'])->name('uncomplete');
});
Route::get('/', [FormController::class, 'index'])->name('form');
Route::post('/store', [FormController::class, 'store'])->name('store');
Route::post('/submitForm', [FormController::class, 'submitForm'])->name('submitForm');
//Route to goToPage
Route::get('/page/{page}', [FormController::class, 'goToPage'])->name('goToPage');