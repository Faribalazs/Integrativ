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

    Route::get('/category', [AdminController::class, 'categoryCreate'])
        ->name('category.create');

    Route::get('/category/edit/{id}', [AdminController::class, 'categoryEdit'])
        ->name('category.edit');

    Route::post('/category/edit/{id}', [AdminController::class, 'categoryEditDone'])
        ->name('category.edit.done');

    Route::delete('/category/delete', [AdminController::class, 'categoryDelete'])
        ->name('category.delete');

    Route::get('/sections', [AdminController::class, 'sectionsCreate'])
        ->name('sections.create');

    Route::get('/sections/edit/{id}', [AdminController::class, 'sectionsEdit'])
        ->name('sections.edit');

    Route::post('/sections/edit/{id}', [AdminController::class, 'sectionsEditDone'])
        ->name('sections.edit.done');

    Route::delete('/sections/delete', [AdminController::class, 'sectionsDelete'])
        ->name('sections.delete');

});