<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\StudentController;
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
    return view('home');
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


Route::prefix('students')->group(function () {
    Route::get('/',[StudentController::class,"index"])->name("students.list");
    Route::get('/create',[StudentController::class,"create"])->name("students.create");
    Route::post('/create',[StudentController::class,"store"])->name("students.store");
    Route::get('/{id}/update',[StudentController::class,"edit"])->name("students.edit");
    Route::post('/{id}/update',[StudentController::class,"update"])->name("students.update");
    Route::get('/{id}/delete',[StudentController::class,"delete"])->name("students.delete");
});

Route::prefix('books')->group(function (){
    Route::get('/',[BookController::class,"index"])-> name("books.index");
    Route::get('/create',[BookController::class,"create"])-> name("books.create");
    Route::post('/create',[BookController::class,"store"])-> name("books.store");
    Route::get('/{id}/update',[BookController::class,"edit"])-> name("books.edit");
    Route::post('/{id}/update',[BookController::class,"update"])-> name("books.update");
    Route::get('/{id}/delete',[BookController::class,"delete"])-> name("books.delete");

});


Route::prefix('borrows')->group(function (){
    Route::get('',[BorrowController::class,"index"])->name('borrows.index');
    Route::get('create',[BorrowController::class,"create"])->name('borrows.create');
    Route::post('create',[BorrowController::class,"store"])->name('borrows.store');
    Route::get('/{id}/update',[BorrowController::class,"edit"])->name('borrows.edit');
    Route::post('/{id}/update',[BorrowController::class,"update"])->name('borrows.update');
    Route::get('/{id}/delete',[BorrowController::class,"delete"])->name('borrows.delete');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth/redirect/{provider}',[SocialController::class,'redirect']);
Route::get('/callback/{provider}',[SocialController::class,'callback']);

