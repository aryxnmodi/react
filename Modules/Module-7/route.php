<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

testing push
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get("/docters", function () {
    return view('docter');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::view('/services', 'services');
Route::get('/subscribers', App\Http\Livewire\Admins\Subscibers::class)->name('subscibers');
Route::get('/contactedus', App\Http\Livewire\Admins\Contactedus::class)->name('contactedus');
    
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
