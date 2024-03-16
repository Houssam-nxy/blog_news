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
    return view('welcome');
})->name('home');

Route::get('/view', function () {
    return view('blogs');
})->name('blogs');

Route::get('/read', function () {
    return view('viewblog');
})->name('read');

Route::get('/create', function () {
    return view('addblog');
})->name('create');
