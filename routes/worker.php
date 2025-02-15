<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerControllers\WorkerController;
use App\Http\Controllers\WorkerControllers\NewPonuda;
use App\Http\Controllers\WorkerControllers\NewOptions;
use App\Http\Controllers\WorkerControllers\OptionsController;
use App\Http\Controllers\WorkerControllers\Archive;

/*
|--------------------------------------------------------------------------
| Worker Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['auth:worker', 'role:worker|super_worker']], function() { 

    Route::get('storage/{filename}', function ($filename)
    {
        return Image::make(storage_path('app/logo/' . $filename))->response();
    })->name('show.img');

});



