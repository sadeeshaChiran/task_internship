<?php

use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\login_viwe_controller;
use App\Http\Controllers\logout_controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/login_viwe', [login_viwe_controller::class, "index"])->name('login_viwe');

Route::get('/', [Home_Controller::class, "index"])->name('Home');

// log out
Route::get('/logout', [logout_controller::class, "logout"])->name('logout');
// ==============
