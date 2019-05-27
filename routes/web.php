<?php

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
    //return view('welcome');
    return view('home');
});

Route::get('/about', function () {
    //return view('welcome');
    return view('about');
});

Route::get('/contact', function () {
    //return view('welcome');
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/artistsignup', function () {
    return view('artistsignup');
});

Route::get('/fansignup', function () {
    return view('fansignup');
});

