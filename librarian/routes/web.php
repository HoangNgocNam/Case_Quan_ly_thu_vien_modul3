<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function (){
    Route::get('/register', [AuthController::class, 'showFormRegister'])->name('auth.showFormRegister');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'showFormLogin'])->name('auth.showFormLogin');
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
    Route::get('/reset',[AuthController::class,"showFromResetPassword"])->name("auth.showFromResetPassword");
    Route::post('/reset',[AuthController::class,"resetPassword"])->name("auth.resetPassword");
});
