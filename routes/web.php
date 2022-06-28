<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\BookingFeatureController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function (){
    Route::resource('room', RoomController::class);
    Route::resource('status', StatusController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('client', ClientController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('booking_feature', BookingFeatureController::class);
});

