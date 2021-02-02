<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\IndexController;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\RegisterController;
use App\Http\Controllers\BackEnd\EditController;
use App\Http\Controllers\BackEnd\AddController;
use App\Http\Controllers\BackEnd\LogoutController;

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

Route::get('/', [IndexController::class,'index'])->name('contact_index');
Route::get('/login', [LoginController::class,'index'])->name('contact_login');
Route::get('/register', [RegisterController::class,'index'])->name('contact_register');
Route::get('/edit', [EditController::class,'index'])->name('contact_edit');
Route::get('/add', [AddController::class,'index'])->name('contact_add');
Route::get('/logout', [LogoutController::class,'index'])->name('contact_logout');