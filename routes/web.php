<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [GuestController::class, 'index']);
Route::get('/syarat', [GuestController::class, 'syarat']);
Route::get('/tatacara', [GuestController::class, 'tatacara']);
Route::get('/faq', [GuestController::class, 'faq']);

Route::get('dashboard', [LoginController::class, 'dashboard']);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');

Route::get('registration', [LoginController::class, 'registration'])->name('register');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
