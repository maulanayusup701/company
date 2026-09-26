<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/signin', 'signin')->name('signin');
        Route::get('/signup', 'signup')->name('signup');
    });
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'landingpage')->name('landingpage');
    Route::get('/service', 'service')->name('service.index');
    Route::get('/contact', 'contact')->name('contact.index');
    Route::get('/ourus', 'ourus')->name('ourus.index');
    Route::get('/article', 'article')->name('article.index');
    Route::get('/event', 'event')->name('event.index');
    Route::get('/gallery', 'gallery')->name('gallery.index');
    Route::get('/klien', 'klien')->name('klien.index');
});
