<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;


Route::get('/',[HomeController::class,'index']);//trang chu
Route::get('/san-pham',[ProductController::class,'index']);//tat ca san pham
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail']);//chi tiet san pham
Route::get('/lien-he',[ContactController::class,'index']);//lien he


//Route::get('admin',[DashboardController::class,'index']);//bảng điều khiển--home admin
//Route::get('admin/category',[DashboardController::class,'index']);//bảng điều khiển--home admin