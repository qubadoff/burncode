<?php

use App\Http\Controllers\Back\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\GeneralController;

Route::get('/services', [GeneralController::class, 'services']);
Route::get('/products', [GeneralController::class, 'products']);

Route::prefix('/contact')->group(function () {
    Route::get('/contactInfo', [ContactController::class, 'contactInfo']);
    Route::post('/sendMessage', [ContactController::class, 'sendMessage']);
});
