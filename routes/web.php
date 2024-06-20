<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashoardController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\OurStoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\TourCategoryController;
use App\Http\Controllers\Backend\TourController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\WhatWeOfferController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\RentCategoryController;
use App\Http\Controllers\Backend\TransportationController as BackendTransportationController;
use App\Http\Controllers\Backend\RentController;
use App\Http\Controllers\Backend\CarController;
use App\Http\Controllers\Backend\TourApplyController;




use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TourController as FrontendTourController;
use App\Http\Controllers\Frontend\RentController as FrontendRentController;
use App\Http\Controllers\Frontend\AboutUsController as FrontendAboutUsController;
use App\Http\Controllers\Frontend\TRansportationController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/admin/login",[AuthController::class,'login'])->name("login");
Route::post("/admin/login",[AuthController::class,'loginPost'])->name("loginPost");


Route::group(["middleware"=>"auth"], function (){
    Route::get('/admin', [DashoardController::class,'index'])->name("admin.dashboard");
    Route::resource("/admin/banner",BannerController::class);
    Route::post("/admin/getBanner",[BannerController::class, "getBanner"])->name("admin.banner.getBanner");
    Route::resource("/admin/tourcategory",TourCategoryController::class);
    Route::post("/admin/getTourCategories",[TourCategoryController::class, "getTourCategory"])->name("admin.tourcategory.getTourCategory");
    Route::resource("/admin/ourstory",OurStoryController::class);
    Route::post("/admin/getOurStory",[OurStoryController::class, "getOurStory"])->name("admin.ourstory.getOurStory");
    Route::resource("/admin/blog",BlogController::class);
    Route::post("/admin/getBlog",[BlogController::class, "getBlog"])->name("admin.blog.getBlog");
    Route::resource("/admin/tour",TourController::class);
    Route::post("/admin/getTour",[TourController::class, "getTour"])->name("admin.tour.getTour");
    Route::resource("/admin/aboutus",AboutUsController::class);
    Route::post("/admin/getAboutUs",[AboutUsController::class, "getAboutUs"])->name("admin.aboutUs.getAboutUs");
    Route::resource("/admin/team",TeamController::class);
    Route::post("/admin/getTeam",[TeamController::class, "getTeam"])->name("admin.team.getTeam");
    Route::resource("/admin/whatweoffer",WhatWeOfferController::class);
    Route::post("/admin/getWhatWeOffer",[WhatWeOfferController::class, "getWhatWeOffer"])->name("admin.whatWeOffer.getWhatWeOffer");
    Route::resource("/admin/city",CityController::class);
    Route::post("/admin/getCity",[CityController::class, "getCity"])->name("admin.city.getCity");
    Route::resource("/admin/media", MediaController::class);
    Route::post("/admin/media/getMedia", [MediaController::class,'getMedia'])->name("admin.media.getMedia");

    Route::resource("/admin/blogcategory", BlogCategoryController::class);
    Route::post("/admin/blogcategory/getBlogCategory", [BlogCategoryController::class,'getBlogCategory'])->name("admin.blogcategory.getBlogCategory");

    Route::resource("/admin/transportation", BackendTransportationController::class);
    Route::post("/admin/transportation/getTransportation", [BackendTransportationController::class,'getTransportation'])->name("admin.transportation.getTransportation");

    Route::resource("/admin/rentcategory", RentCategoryController::class);
    Route::post("/admin/rentcategory/getRentCategory", [RentCategoryController::class,'getRentCategory'])->name("admin.rentcategory.getRentCategory");

    Route::resource("/admin/rent", RentController::class);
    Route::post("/admin/rent/getRent", [RentController::class,'getRent'])->name("admin.rent.getRent");

    Route::resource("/admin/car", CarController::class);
    Route::post("/admin/car/getCar", [CarController::class,'getCar'])->name("admin.car.getCar");

    Route::get("/admin/tourapply", [TourApplyController::class,'index'])->name('tourapply.index');
  Route::post("/admin/tourapply/getTourapply", [TourApplyController::class,'getTourapply'])->name("admin.tourapply.getTourapply");
});


Route::get('/', [HomeController::class,'index']);
Route::get('/{locale?}/tours', [FrontendTourController::class,'index']);
Route::post('/{locale?}/tour/apply/{id}', [FrontendTourController::class,'apply']);
Route::get('/{locale?}/tours/{tour}', [FrontendTourController::class,'inner']);
Route::get('/{locale?}/transportation', [TRansportationController::class,'index']);
Route::get('/{locale?}/rent', [FrontendRentController::class,'index']);
Route::get('/{locale?}/aboutus', [FrontendAboutUsController::class,'index']);
Route::get('/{locale?}/news', [FrontendBlogController::class,'index']);
Route::get('/{locale?}/news/category/{id}', [FrontendBlogController::class,'category']);

Route::get('/{locale?}/news/{new}', [FrontendBlogController::class,'inner']);
Route::get('/{locale?}/contactus', [ContactUsController::class,'index']);
Route::get('/{locale?}/rent/category/{id}', [FrontendRentController::class,'category'])->name('rent.category');


