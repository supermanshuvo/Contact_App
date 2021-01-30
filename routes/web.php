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
});
Route::get('/login',function(){
    return view('contact.login');
});
Route::get('/register', function(){
    return view('contact.register');
});
Route::get('/edit', function(){
    return view('contact.edit');
});
Route::get('/add', function(){
    return view('contact.add');
});