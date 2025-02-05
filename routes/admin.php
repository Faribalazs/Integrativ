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

    Route::get('/category/create', [AdminController::class, 'categoryAddNew'])
        ->name('category.add');

    Route::post('/category/create/save', [AdminController::class, 'categoryAddNewDone'])
        ->name('category.add.done');

    Route::get('/category/edit/{id}', [AdminController::class, 'categoryEdit'])
        ->name('category.edit');

    Route::post('/category/edit/{id}', [AdminController::class, 'categoryEditDone'])
        ->name('category.edit.done');

    Route::delete('/category/delete', [AdminController::class, 'categoryDelete'])
        ->name('category.delete');

    //Slider routes
    Route::get('/slider', [AdminController::class, 'sliderCreate'])
        ->name('slider.create');

    Route::get('/slider/create', [AdminController::class, 'sliderAddNew'])
        ->name('slider.add');

    Route::post('/slider/create/save', [AdminController::class, 'sliderAddNewDone'])
        ->name('slider.add.done');

    Route::get('/slider/edit/{id}', [AdminController::class, 'sliderEdit'])
        ->name('slider.edit');

    Route::post('/slider/edit/{id}', [AdminController::class, 'sliderEditDone'])
        ->name('slider.edit.done');

    Route::delete('/slider/delete', [AdminController::class, 'sliderDelete'])
        ->name('slider.delete');

    //Sections routes
    Route::get('/sections', [AdminController::class, 'sectionCreate'])
        ->name('section.create');

    Route::get('/sections/create', [AdminController::class, 'sectionAddNew'])
        ->name('section.add');

    Route::post('/sections/create/save', [AdminController::class, 'sectionAddNewDone'])
        ->name('section.add.done');

    Route::get('/sections/edit/{id}', [AdminController::class, 'sectionEdit'])
        ->name('section.edit');

    Route::post('/sections/edit/{id}', [AdminController::class, 'sectionEditDone'])
        ->name('section.edit.done');

    Route::delete('/sections/delete', [AdminController::class, 'sectionDelete'])
        ->name('section.delete');

});