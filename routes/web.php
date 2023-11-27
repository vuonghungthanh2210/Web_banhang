<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;


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

Route::get('/welcome', function () {
    return 'chao mung cac ban den voi PNV';
});
Route::get('/hi', [UserController::class, 'xinchao']);

Route::get('/login',[LoginController::class,'login']);

Route::get('/index', [IndexController::class,'index']);

Route::get('/wel', [WelController::class,'welcome']);

Route::get('/signup', [SignupController::class,'index']);
Route::post('/signup', [SignupController::class,'displayInfor']);

Route::get('/admin', [AdminController::class,'index']);
Route::post('/admin', [AdminController::class,'addRoom']);

Route::get('/master', [PageController::class,'getIndex']);

Route::get('/loaisp', [PageController::class,'getLoaiSp']);

Route::get('/chitiet', [PageController::class,'getChitiet']);

Route::get('/lienhe', [PageController::class,'getLienhe']);

Route::get('/about', [PageController::class,'getAbout']);

Route::get('/addform',[PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/addform', [PageController::class,'postAdminAdd']);

Route::get('/editform',[PageController::class, 'getAdminEdit']);
Route::post('/editform/{id}', [PageController::class,'postAdminEdit']);





















 

