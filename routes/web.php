<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['guest'])->group(function () {
    //Google
    Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback'])->name('callback.google');
});

Route::get('/', [DashboardController::class, 'home'])->name('home');

// Form submit routes
Route::post('/save/contact', [DashboardController::class, 'saveContact'])->name('save.contact.info');

Route::post('/save/education', [DashboardController::class, 'storeEducationSignUp'])->name('save.education.sign-up');

Route::post('/save/conference', [DashboardController::class, 'storeConferenceSignUp'])->name('save.conference.sign-up');

// Pages routes
Route::get('/about-us', [DashboardController::class, 'aboutUs'])->name('about.us');

Route::get('/edukacija', [DashboardController::class, 'edukacija'])->name('edukacija');

Route::get('/konferencije', [DashboardController::class, 'konferencije'])->name('konferencije');

Route::get('/konferencije/show/{id}', [DashboardController::class, 'konferencijeShowOne'])->name('konferencije.show');

Route::get('/modaliteti', [DashboardController::class, 'modaliteti'])->name('modaliteti');

require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';
require __DIR__.'/workerauth.php';
require __DIR__.'/worker.php';
require __DIR__.'/admin.php';
