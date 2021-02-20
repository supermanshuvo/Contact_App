<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\IndexController;
use App\Http\Controllers\BackEnd\LoginController;
use App\Http\Controllers\BackEnd\RegisterController;
use App\Http\Controllers\BackEnd\EditController;
use App\Http\Controllers\BackEnd\AddController;


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
// All Get Method in here
Route::get('/', [IndexController::class,'index'])->name('contact_index');
Route::get('/login', [LoginController::class,'index'])->name('contact_login');
Route::get('/register', [RegisterController::class,'index'])->name('contact_register');
Route::get('/edit', [EditController::class,'index'])->name('contact_edit');
Route::get('/add', [AddController::class,'index'])->name('contact_add');
Route::get('/logout', [IndexController::class,'destroy'])->name('contact_logout');
Route::get('delete/{id}',[IndexController::class,'delete'])->name('delete');
Route::get('edit/{id}',[EditController::class,'edit']);


// All Post Method in here
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::post('/add', [AddController::class,'store'])->name('add');
Route::post('/edit',[EditController::class,'update'])->name('edit');
Route::post('/check',[LoginController::class,'authenticate'])->name('auth.check');