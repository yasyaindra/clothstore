<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home');
});

Route::get("/product/{id}", function(){
    return view("product.index");
});

Route::prefix('8607101e-3b82-11ee-be56-0242ac120002')->group(function () {
    Route::get("dashboard", function(){
        return view("dashboard.index");
    })->name("dashboard.index");
    
    Route::resource('dashboard/product', ProductController::class);
    Route::resource('dashboard/category', CategoryController::class);


    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::post('reset-password', [AuthController::class, 'password_action'])->name('password.action');

    Route::get('profile', function(){
        return view("dashboard.profile");
    })->name('profile');
});

