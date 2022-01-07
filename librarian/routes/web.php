<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\UserController;
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
    return view('home.master');
});


Route::prefix('auth')->group(function () {
    Route::get('/register',[AuthController::class,'showFormRegister'])->name('auth.showFormRegister');
    Route::post('/register',[AuthController::class,'register'])->name('auth.register');
    Route::get('/login',[AuthController::class,'showFormLogin'])->name('auth.showFormLogin');
    Route::post('/login',[AuthController::class,'login'])->name('auth.login');
    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
});

Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class, "index"])->name("users.index");
    Route::get('/create',[UserController::class,'create'])->name('users.create');
    Route::post('/create',[UserController::class,'store'])->name('users.store');
    Route::get('/{id}/delete',[UserController::class,'delete'])->name('users.delete');
    Route::get('/{id}/update',[UserController::class,'edit'])->name('users.edit');
    Route::post('/{id}/update',[UserController::class,'update'])->name('users.update');
});

Route::prefix('catalogs')->group(function (){
    Route::get('/',[CatalogController::class,'index'])->name('catalogs.index');
    Route::get('/create',[CatalogController::class,'create'])->name('catalogs.create');
    Route::post('/create',[CatalogController::class,'store'])->name('catalogs.store');
    Route::get('/{id}/update',[CatalogController::class,'edit'])->name('catalogs.edit');
    Route::post('/{id}/update',[CatalogController::class,'update'])->name('catalogs.update');
    Route::get('/{id}/delete',[CatalogController::class,'delete'])->name('catalogs.delete');
});
