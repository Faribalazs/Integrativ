<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');

    //Category routes
    Route::get('/category', [AdminController::class, 'categoryCreate'])
        ->name('category.create');

    Route::get('/category/edit/{id}', [AdminController::class, 'categoryEdit'])
        ->name('category.edit');

    Route::post('/category/edit/{id}', [AdminController::class, 'categoryEditDone'])
        ->name('category.edit.done');

    Route::delete('/category/delete', [AdminController::class, 'categoryDelete'])
        ->name('category.delete');

    //Slider routes
    Route::get('/slider', [AdminController::class, 'sliderCreate'])
        ->name('slider.create');

    Route::get('/slider/edit/{id}', [AdminController::class, 'sliderEdit'])
        ->name('slider.edit');

    Route::post('/slider/edit/{id}', [AdminController::class, 'sliderEditDone'])
        ->name('slider.edit.done');

    Route::delete('/slider/delete', [AdminController::class, 'sliderDelete'])
        ->name('slider.delete');

    //Sections routes
    Route::get('/sections', [AdminController::class, 'sectionsCreate'])
        ->name('sections.create');

    Route::get('/sections/edit/{id}', [AdminController::class, 'sectionsEdit'])
        ->name('sections.edit');

    Route::post('/sections/edit/{id}', [AdminController::class, 'sectionsEditDone'])
        ->name('sections.edit.done');

    Route::delete('/sections/delete', [AdminController::class, 'sectionsDelete'])
        ->name('sections.delete');

});