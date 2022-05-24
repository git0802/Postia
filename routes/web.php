<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
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
Route::view('/', 'dashboard')->name('dashboard');


Route::group(['middleware' => 'auth'], function() {
    Route::resource('posts', PostController::class);
    Route::inertia('pages/about', 'About')->name('pages.about');
});

Route::inertia('login', 'Auth/Login')->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.post');
Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
