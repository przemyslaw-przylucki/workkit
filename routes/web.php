<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', LoginController::class . '@showLoginForm')->name('login');
Route::post('', LoginController::class . '@login');
Route::get('register', RegisterController::class . '@showRegistrationForm')->name('register');
Route::post('register', RegisterController::class . '@register');
Route::get('logout', LoginController::class . '@logout')->name('logout');

Route::get('email/verify', VerificationController::class . '@show')->name('verification.notice');
Route::get('email/verify/{id}', VerificationController::class . '@verify')->name('verification.verify');
Route::post('email/resend', VerificationController::class . '@resend')->name('verification.resend');

Route::get('/home', HomeController::class . '@index')->name('home');
