<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Landing Page Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('/course', [LandingController::class, 'course'])->name('landing.course');
Route::get('/feature', [LandingController::class, 'feature'])->name('landing.feature');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('calendar');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
    Route::get('/table-plugins', [AdminController::class, 'tablePlugins'])->name('table-plugins');
    Route::get('/ui-modal-notification', [AdminController::class, 'uiModal'])->name('ui-modal');
    Route::get('/ui-modal', [AdminController::class, 'uiModal'])->name('ui-modal-alias');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
});
