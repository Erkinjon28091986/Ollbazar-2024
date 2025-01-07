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
    return view('index');
});


Route::get('/details', function () {
    return view('details');
})->name('details');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet');
