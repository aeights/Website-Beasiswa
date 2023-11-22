<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ScholarshipController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('logout', function () {
    Auth::logout();
    return back();
})->name('logout');

Route::controller(HomeController::class)->group(function () {
    Route::get('redirecting', 'redirect')->name('redirect');
    Route::get('/', 'index')->name('landing');
    Route::get('pilihan-beasiswa', 'scholarship')->name('scholarship');
});

Route::controller(ScholarshipController::class)->group(function () {
    Route::get('daftar-beasiswa', 'apply')->name('scholarship.apply');
    Route::post('daftar-beasiswa', 'applyStore')->name('scholarship.apply.store');
    Route::get('cek-hasil', 'result')->name('scholarship.result');
    Route::get('hasil', 'resultCheck')->name('scholarship.result.check');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('login.process');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('register');
    Route::post('register', 'register')->name('register.process');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard/admin', 'index')->name('dashboard.admin');
    });
});
