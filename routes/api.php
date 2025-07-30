<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\GeneralController;

Route::get('/services', [GeneralController::class, 'services']);
