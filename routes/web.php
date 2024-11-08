<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\{AuthenticationManageController};

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
});