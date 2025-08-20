<?php

use App\Http\Controllers\Front\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'comingSoon'])->name('comingSoon');

    Route::post('/contact-send', [GeneralController::class, 'contactSend'])->name('contactSend')->middleware('throttle:3,1');
});
