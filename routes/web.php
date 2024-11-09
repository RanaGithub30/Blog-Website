<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\{AuthenticationManageController};
use App\Http\Controllers\Admin\{AdminManageController};
use App\Http\Controllers\User\{UserManageController};

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

Route::controller(AuthenticationManageController::class)->group(function () {
        Route::get('/', 'index')->name('/');
        Route::get('/register', 'register')->name('/register');
        Route::post('/registration', 'register_submit')->name('registration');
        Route::post('/login', 'login')->name('/login');
});

Route::middleware(['auth'])->group(function () {
        Route::controller(UserManageController::class)->group(function () {
                Route::get('/user/dashboard', 'dashboard')->name('/user/dashboard');
        });
        
        Route::controller(AdminManageController::class)->group(function () {
                Route::get('/admin/dashboard', 'dashboard')->name('/admin/dashboard');
        });

        Route::controller(AuthenticationManageController::class)->group(function () {
                Route::get('/logout', 'logout')->name('/logout');
        });
});