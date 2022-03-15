<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'login']);
Route::post('/', [AppController::class, 'userlogin']);

Route::get('/logout', [AppController::class, 'logout']);

Route::get('/dashboard', [AppController::class, 'dashboard']);

Route::get('/deposit', [AppController::class, 'deposit']);
Route::post('/deposit', [AppController::class, 'createdeposit']);

Route::get('/deposit/{id}', [AppController::class, 'viewdeposit']);
