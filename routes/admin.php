<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CategoryListController;
use App\Http\Controllers\Admin\Category\SuperCategoryController;
use App\Http\Controllers\Admin\ColorCategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
// Route::resource('setting', SettingController::class);
Route::resource('slider', SliderController::class);
Route::resource('product', ProductController::class);
Route::resource('productCategory', ProductCategoryController::class);

Route::resource('service', ServiceController::class);
Route::put('service/{service}/updateSlider', [ServiceController::class, 'updateSlider'])->name('service.updateSlider');

Route::resource('color', ColorController::class);
Route::resource('colorCategory', ColorCategoryController::class);
Route::resource('enquiry', EnquiryController::class);
Route::put('enquiry/{enquiry}/updateStatus', [EnquiryController::class, 'updateStatus'])->name('enquiry.updateStatus');

Route::resource('whyChoose', WhyChooseController::class);
Route::resource('systemSetting', SystemSettingController::class);
Route::resource('about', AboutController::class);

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::put('enquiry/{enquiry}/deleteNotification', [EnquiryController::class, 'deleteNotification'])->name('enquiry.deleteNotification');

Route::get('readAllNotification', [EnquiryController::class, 'readAllNotification'])->name('enquiry.readAllNotification');

Route::resource('category',CategoryController::class);
Route::resource('category/{category}/superCategory', SuperCategoryController::class)->names('category.superCategory');
Route::resource('category/{category}/categoryList', CategoryListController::class)->names('category.categoryList');
Route::resource('menu', MenuController::class);
Route::get('/get-menu-types', [MenuController::class, 'getMenuTypes'])->name('get.menu.types');