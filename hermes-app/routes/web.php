<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeratorController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::resource('/home', HomeController::class);
Route::resource('/home-user', UserController::class);
Route::resource('/home-moderator', ModeratorController::class);