<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RektoratController;
use App\Http\Controllers\ModeratorController;

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

Route::group(['middleware' => function ($request, $next) {
    if (session('role') !== 'admin') {
        abort(403, 'Kamu gak berhak kesini :)');
    }
    return $next($request);
}], function () {
    // admin
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('admin/update', [AdminController::class, 'update'])->name('admin.update');
    Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('admin/edit-password/{id}', [AdminController::class, 'editPassword'])->name('admin.edit-password');
    Route::post('admin/update-password', [AdminController::class, 'updatePassword'])->name('admin.update-password');
});

Route::group(['middleware' => function ($request, $next) {
    if (session('role') !== 'student') {
        abort(403, 'Kamu gak berhak kesini :)');
    }
    return $next($request);
}], function () {
    // student
    Route::get('student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('student/pengajuan', [StudentController::class, 'pengajuan'])->name('student.pengajuan');
    Route::get('student/create-pengajuan', [StudentController::class, 'createPengajuan'])->name('student.create-pengajuan');
    Route::post('student/store-pengajuan', [StudentController::class, 'storePengajuan'])->name('student.store-pengajuan');
});

// Route::group(['middleware' => function ($request, $next) {
//     if (session('role') !== 'moderator') {
//         abort(403, 'Kamu gak berhak kesini :)');
//     }
//     return $next($request);
// }], function () {
//     // moderator
//     Route::get('moderator/dashboard', [ModeratorController::class, 'index'])->name('moderator.dashboard');
//     Route::get('moderator/pengajuan', [ModeratorController::class, 'pengajuan'])->name('moderator.pengajuan');
//     Route::get('moderator/terima/{id}', [ModeratorController::class, 'terima'])->name('moderator.terima');
//     Route::get('moderator/tolak/{id}', [ModeratorController::class, 'tolak'])->name('moderator.tolak');
// });

Route::get('moderator/dashboard', [ModeratorController::class, 'index'])->name('moderator.dashboard');
Route::get('moderator/pengajuan/', [ModeratorController::class, 'pengajuan'])->name('moderator.pengajuan');
Route::post('/moderator/update-status/{id}', [ModeratorController::class, 'updateStatus'])->name('moderator.update-status');

Route::get('rectorate/dashboard', [RektoratController::class, 'index'])->name('rectorate.dashboard');
Route::get('rectorate/pengajuan/', [RektoratController::class, 'pengajuan'])->name('rectorate.pengajuan');
Route::post('/rectorate/update-status/{id}', [RektoratController::class, 'updateStatus'])->name('rectorate.update-status');
