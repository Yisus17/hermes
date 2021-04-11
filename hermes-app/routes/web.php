<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SimpleUserController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Rutas Homes por roles
Route::resource('/home', HomeController::class);
Route::resource('/home-moderator', ModeratorController::class);
Route::resource('/home-simple-user', SimpleUserController::class);

//Usuarios
Route::resource('/users', UserController::class);

//Companies
Route::resource('/companies', CompanyController::class);

//Products
Route::resource('/products', ProductController::class);

Route::get('/about', [HomeController::class, 'about']);
