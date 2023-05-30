<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


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

//guest
Route::middleware('isGuest')->group(function(){


Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register/post', [UserController::class, 'inputRegister']);
Route::post('/login/auth', [UserController::class, 'auth']);
});

Route::get('/logout', [UserController::class, 'logout']);
//auth->admin
Route::get('/', [BookController::class, 'index']);
Route::get('/about', [BookController::class, 'about']);
Route::get('/book', [BookController::class, 'book']);
Route::get('/detail/{id}', [BookController::class, 'show']);

    Route::middleware(['isLogin', 'cekRole:admin,user'])->group(function(){
       Route::post('/detail/download/{id}', [BookController::class, 'cetakPDF'])->name('download');
    });

    Route::middleware(['isLogin', 'cekRole:admin'])->group(function(){
        Route::get('/create', [BookController::class, 'create']);
        Route::post('/create/store', [BookController::class, 'store'])->name('store');
        Route::get('/book/edit', [BookController::class, 'edit']);
        Route::get('/book/data', [BookController::class, 'allBook']);
        Route::get('/book/all/export', [BookController::class, 'Excel'])->name('export');
        Route::get('/category', [CategoryController::class, 'index']);
        Route::post('/category/post', [CategoryController::class, 'createCategory'])->name('category');
        Route::get('/user/data', [UserController::class, 'userData']);
        Route::delete('/book/delete/{id}', [BookController::class, 'destroy']);
    });


Route::get('/error', function(){
    return view('error');
});