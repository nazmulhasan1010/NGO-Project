<?php

use App\Http\Controllers\Backend\aboutController;
use App\Http\Controllers\Backend\activityController;
use App\Http\Controllers\Backend\beneficiaryLocationsController;
use App\Http\Controllers\Backend\developmentComponentController;
use App\Http\Controllers\Backend\eventController;
use App\Http\Controllers\Backend\imageGalleryController;
use App\Http\Controllers\Backend\newsController;
use App\Http\Controllers\Backend\noticeController;
use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Backend\publicationController;
use App\Http\Controllers\Backend\reportController;
use App\Http\Controllers\Backend\sliderController;
use App\Http\Controllers\Backend\videoGalleryController;
use App\Http\Controllers\Backend\workingAreaController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UsersController;


Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

// Route::get('/about', [App\Http\Controllers\HomeController::class, 'index'])->name('about');


// Backend Controllers

Route::group(['prefix'=>'admin','middleware' => 'auth'],function (){
    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('users',UsersController::class);
    Route::resource('about',aboutController::class);
    Route::resource('workingArea',workingAreaController::class);
    Route::resource('component',developmentComponentController::class);
    Route::resource('slider',sliderController::class);
    Route::resource('imageGallery',imageGalleryController::class);
    Route::resource('videoGallery',videoGalleryController::class);
    Route::resource('product',productController::class);
    Route::resource('report',reportController::class);
    Route::resource('publication',publicationController::class);
    Route::resource('news',newsController::class);
    Route::resource('event',eventController::class);
    Route::resource('beneficiaryLocations',beneficiaryLocationsController::class);
    Route::resource('activity',activityController::class);
    Route::resource('notice',noticeController::class);
});
