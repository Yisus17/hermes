<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SimpleUserController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BudgetController;

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

//Products
Route::resource('/contacts', ContactController::class);

//Budgets
Route::resource('/budgets', BudgetController::class);

Route::get('/about', [HomeController::class, 'about']);
