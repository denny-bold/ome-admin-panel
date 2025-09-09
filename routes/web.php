<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\SettingsController;

/*
|---------------------------------------------------
| Web Routes
|---------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::resource('streams', StreamController::class);
    Route::resource('channels', ChannelController::class);
    Route::get('settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::post('settings', [SettingsController::class, 'update'])->name('settings.update');
});

Auth::routes();  // run `composer require laravel/ui && php artisan ui bootstrap --auth`
