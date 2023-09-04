<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TypeController;
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

Route::get('register', [RegisterController::class, 'registrationForm']);
Route::post('register',[RegisterController::class, 'store'])
    ->name('register');

Route::get('/', [PagesController::class,'index']);


 Route:: get('room', [TypeController::class, 'roomForm']) ->name('room');
 Route::post('/', [TypeController::class,'roomForm']);

 Route:: get('location', [TypeController::class, 'locationForm']) ->name('location');
 Route::post('/', [TypeController::class,'locationForm']);

 Route:: get('price', [TypeController::class, 'price']) ->name('price');
 Route::post('/', [TypeController::class,'price']);

 Route:: get('type', [TypeController::class, 'roomType']);
 Route::post('/', [TypeController::class,'store'])->name('type');

 Route:: get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/', [LoginController::class,'logout'])->name('logout');




