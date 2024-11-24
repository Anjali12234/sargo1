<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('color', 'color')->name('color');
    Route::get('color/{color:slug}','colorDetail')->name('colorDetail');

    Route::get('productCategory/{productCategory:slug}', 'productCategory')->name('productCategory');
    Route::get('product/{product:slug}','productDetail')->name('productDetail');
    Route::get('/service/{value}', 'service')->name('service');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
