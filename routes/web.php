<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashoardController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\TourCategoryController;
use App\Http\Controllers\Backend\OurStoryController;
use App\Http\Controllers\Backend\BlogController;

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
});
