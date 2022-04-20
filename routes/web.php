<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
    //return view('pages.index');
//});

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Path to Admin Dashboard or user dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'redirect'])->name('dashboard');
