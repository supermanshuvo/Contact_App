<?php

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
    return view('contact.index');
})->name('index');
Route::get('/login',function(){
    return view('contact.login');
})->name('login');
Route::get('/register', function(){
    return view('contact.register');
})->name('register');
Route::get('/edit', function(){
    return view('contact.edit');
})->name('edit');
Route::get('/add', function(){
    return view('contact.add');
})->name('add');
Route::get('/logout', function(){
    return view('contact.login');
})->name('logout');