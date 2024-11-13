<?php

use App\Http\Controllers\AtteController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AtteController::class, 'showRegisterForm'])->name('auth.register');
Route::get('/login', [AtteController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AtteController::class, 'login'])->name('auth.login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AtteController::class, 'index'])->name('atte.index');
    Route::get('/attendance', [AtteController::class, 'attendance'])->name('atte.attendance');
    Route::post('/work/start', [AtteController::class, 'startWork'])->name('atte.startWork');
    Route::post('/work/end', [AtteController::class, 'endWork'])->name('atte.endWork');
    Route::post('/break/start', [AtteController::class, 'startBreak'])->name('atte.startBreak');
    Route::post('/break/end', [AtteController::class, 'endBreak'])->name('atte.endBreak');
});
