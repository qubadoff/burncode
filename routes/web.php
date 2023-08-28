<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [\App\Http\Controllers\Front\GeneralController::class, 'index'])->name('index');

    Route::get('/services', [\App\Http\Controllers\Front\GeneralController::class, 'services'])->name('services');
    Route::get('/services/{slug}', [\App\Http\Controllers\Front\GeneralController::class, 'singleService'])->name('singleService');

    Route::get('/projects', [\App\Http\Controllers\Front\GeneralController::class, 'projects'])->name('projects');
    Route::get('/projects/{slug}', [\App\Http\Controllers\Front\GeneralController::class, 'singleProjects'])->name('singleProject');

    Route::get('/news', [\App\Http\Controllers\Front\GeneralController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [\App\Http\Controllers\Front\GeneralController::class, 'singleNews'])->name('singleNews');
    Route::get('/category/{slug}', [\App\Http\Controllers\Front\GeneralController::class, 'singlecat'])->name('singlecat');

    Route::get('/contact', [\App\Http\Controllers\Front\GeneralController::class, 'contact'])->name('contact');
    Route::post('/contact-send', [\App\Http\Controllers\Front\GeneralController::class, 'contactSend'])->name('contactSend');
    Route::post('/subscribe-send', [\App\Http\Controllers\Front\GeneralController::class, 'subscribeSend'])->name('subscribeSend');


});
