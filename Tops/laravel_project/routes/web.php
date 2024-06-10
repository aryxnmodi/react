<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.index');
});

//Route::view('/dashboard','admin.dashboard');  // Limitation don’t pass value in this method


Route::get('/it_about', function () {
    return view('website.it_about');
});
Route::get('/it_service', function () {
    return view('website.it_service');
});

Route::get('/edit_profile', function () {
    return view('website.edit_profile');
});
Route::get('/it_blog', function () {
    return view('website.it_blog');
});

Route::get('/it_contact',[ContactController::class,'create']);
Route::post('/it_contact',[ContactController::class,'store']);

Route::get('/signup',[CustomerController::class,'create']);
Route::post('/signup',[CustomerController::class,'store']);

Route::get('/login',[CustomerController::class,'user_login']);
Route::get('/profile',[CustomerController::class,'show']);




// Admin

Route::get('/admin_login',[CustomerController::class,'admin_login']);
Route::get('/manage_user',[CustomerController::class,'index']);
Route::get('/manage_user/{id}',[CustomerController::class,'destroy']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/add_categories',[CategoryController::class,'create']);
Route::get('/manage_categories',[CategoryController::class,'index']);
Route::get('/manage_categories/{id}',[CategoryController::class,'destroy']);

Route::get('/manage_contact',[ContactController::class,'index']);
Route::get('/manage_contact/{id}',[ContactController::class,'destroy']);

Route::get('/add_product',[ProductController::class,'create']);
Route::get('/manage_product',[ProductController::class,'index']);
Route::get('/manage_product/{id}',[ProductController::class,'destroy']);