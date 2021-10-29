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
});

Route::get('/tutorial01', function () {
    return view('tutorial01');
});


Route::get('/tutorial02', function () {
    return view('tutorial02');
});


Route::get('/tutorial03', function () {
    return view('tutorial03');
});


Route::get('/tutorial04', function () {
    return view('tutorial04');
});

Route::get('/tutorial05', function () {
    return view('tutorial05');
});

Route::get('/tutorial06', function () {
    return view('tutorial06');
});

Route::get('/tutorial07', function () {
    return view('tutorial07');
});