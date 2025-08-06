<?php

use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\GeneralController;

Route::get('/services', [GeneralController::class, 'services']);
Route::get('/products', [GeneralController::class, 'products']);

Route::prefix('/contact')->group(function () {
    Route::get('/contactInfo', [ContactController::class, 'contactInfo']);
    Route::post('/sendMessage', [ContactController::class, 'sendMessage'])->middleware('throttle:2,1');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'list']);
    Route::get('/categories', [BlogController::class, 'categories']);
});


Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class, 'list']);
    Route::get('/categories', [ProjectController::class, 'categories']);
});
