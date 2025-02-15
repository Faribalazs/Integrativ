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

    //Home page routes
    Route::get('/home/page', [AdminController::class, 'homeCreate'])
        ->name('home.create');

    Route::get('/home/edit/{id}', [AdminController::class, 'homeEdit'])
        ->name('home.edit');

    Route::post('/home/edit/{id}', [AdminController::class, 'homeEditDone'])
        ->name('home.edit.done');

    //Partners routes
    Route::get('/partners', [AdminController::class, 'partnerCreate'])
        ->name('partner.create');

    Route::get('/partners/create', [AdminController::class, 'partnerAddNew'])
        ->name('partner.add');

    Route::post('/partners/create/save', [AdminController::class, 'partnerAddNewDone'])
        ->name('partner.add.done');

    Route::get('/partners/edit/{id}', [AdminController::class, 'partnerEdit'])
        ->name('partner.edit');

    Route::post('/partners/edit/{id}', [AdminController::class, 'partnerEditDone'])
        ->name('partner.edit.done');

    Route::delete('/partners/delete', [AdminController::class, 'partnerDelete'])
        ->name('partner.delete');

    //Conference routes
    Route::get('/conferences', [AdminController::class, 'conferenceCreate'])
        ->name('conference.create');

    Route::get('/conference/create', [AdminController::class, 'conferenceAddNew'])
        ->name('conference.add');

    Route::post('/conference/create/save', [AdminController::class, 'conferenceAddNewDone'])
        ->name('conference.add.done');

    Route::get('/conference/edit/{id}', [AdminController::class, 'conferenceEdit'])
        ->name('conference.edit');

    Route::post('/conference/edit/{id}', [AdminController::class, 'conferenceEditDone'])
        ->name('conference.edit.done');

    Route::delete('/conference/delete', [AdminController::class, 'conferenceDelete'])
        ->name('conference.delete');

    //Contact routes
    Route::get('/contacts', [AdminController::class, 'contactCreate'])
        ->name('contact.create');

    Route::get('/contact/show/{id}', [AdminController::class, 'contactShow'])
        ->name('contact.show');

    Route::delete('/contact/delete', [AdminController::class, 'contactDelete'])
        ->name('contact.delete');

});