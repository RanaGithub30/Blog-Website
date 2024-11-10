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
        Route::controller(UserManageController::class)->prefix('/user')->group(function () {
                Route::get('dashboard', 'dashboard')->name('/user/dashboard');
        });
        
        Route::controller(AdminManageController::class)->prefix('/admin')->group(function () {
                Route::get('dashboard', 'dashboard')->name('/admin/dashboard');
                Route::get('user-list', 'user_list')->name('/admin/user-list');
                Route::get('user-delete/{userId}', 'user_delete')->name('/admin/user-delete');
                Route::get('user-edit/{userId}', 'user_edit')->name('/admin/user-edit');
                Route::post('user-update/{userId}', 'user_update')->name('/admin/user-update');
        });

        Route::controller(AuthenticationManageController::class)->group(function () {
                Route::get('/logout', 'logout')->name('/logout');
        });
});