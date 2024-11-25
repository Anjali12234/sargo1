<?php

use App\Http\Controllers\Admin\ColorCategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\WhyChooseController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
// Route::resource('setting', SettingController::class);
Route::resource('slider', SliderController::class);
Route::resource('product', ProductController::class);
Route::resource('productCategory', ProductCategoryController::class);
Route::resource('service', ServiceController::class);
Route::resource('color', ColorController::class);
Route::resource('colorCategory', ColorCategoryController::class);
Route::resource('enquiry', EnquiryController::class);
Route::resource('whyChoose', WhyChooseController::class);
Route::resource('systemSetting', SystemSettingController::class);

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
