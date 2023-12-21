<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\arlertController;
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
    return view('index');
});

Route::get('/', [homepageController::class, 'index']);
Route::get('/search', [homepageController::class, 'search'])->name('search');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/alert', [arlertController::class, 'alert']);
