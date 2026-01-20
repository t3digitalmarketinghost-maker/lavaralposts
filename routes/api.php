<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/greetings', [GreetingController::class, 'index']);
Route::post('/greetings', [GreetingController::class, 'store']);
Route::delete('/greetings/{id}', [GreetingController::class, 'destroy']);
