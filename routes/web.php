<?php

use App\Http\Controllers\Front\Auth\AuthController;
use App\Http\Controllers\Front\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'comingSoon'])->name('comingSoon');
//    Route::get('/', [GeneralController::class, 'index'])->name('index');

    Route::get('/services', [GeneralController::class, 'services'])->name('services');
    Route::get('/services/{slug}', [GeneralController::class, 'singleService'])->name('singleService');

    Route::get('/projects', [GeneralController::class, 'projects'])->name('projects');
    Route::get('/projects/{slug}', [GeneralController::class, 'singleProjects'])->name('singleProject');
    Route::get('/project-category/{slug}', [GeneralController::class, 'singleProjectCat'])->name('singleProjectCat');

    Route::get('/products', [GeneralController::class, 'products'])->name('products');
    Route::get('/products/{slug}', [GeneralController::class, 'singleProduct'])->name('singleProduct');

    Route::get('/news', [GeneralController::class, 'news'])->name('news');
    Route::get('/news/{slug}', [GeneralController::class, 'singleNews'])->name('singleNews');
    Route::get('/category/{slug}', [GeneralController::class, 'singlecat'])->name('singlecat');

    Route::get('/team', [GeneralController::class, 'team'])->name('team');
    Route::get('/team/{slug}', [GeneralController::class, 'teamSingle'])->name('teamSingle');

    Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
    Route::post('/contact-send', [GeneralController::class, 'contactSend'])->name('contactSend')->middleware('throttle:3,1');
    Route::post('/subscribe-send', [GeneralController::class, 'subscribeSend'])->name('subscribeSend')->middleware('throttle:3,1');

    Route::get('/faq', [GeneralController::class, 'faq'])->name('faq');

    Route::get("/login", [AuthController::class, 'login'])->name("login");
});
