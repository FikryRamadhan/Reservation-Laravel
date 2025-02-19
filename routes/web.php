<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/list-hotel/{hotel}/booking-hotel', [BookingController::class, 'create'])->name('hotel.booking.create');
    Route::get('list-hotel/{hotel}/booking-hotel', [BookingController::class, 'bookinghotel'])->name('hotel.booking');
});

Route::get('list-hotel/{hotel}/detail-hotel', [HotelController::class, 'detailHotel'])->name('hotel.detail');

Route::get('list-hotel', [HotelController::class, 'getAllHotels'])->name('hotel.all');
Route::get('/', [HotelController::class, 'landing'])->name('hotel.landing');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthController::class, 'loginVerify'])->name('auth.loginVerify');
    Route::post('/register', [AuthController::class, 'registerVerify'])->name('auth.registerVerify');
});
