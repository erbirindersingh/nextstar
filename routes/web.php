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

Route::post('/adduser','SiteusersController@registernewuser');
Route::post('/verifyuser','SiteusersController@verifyuser');
Route::post('/forgotpassword','SiteusersController@forgotpassword');


Route::get('/', function () {
    //return view('welcome');
    return view('home');
});

Route::get('/logout', function () {
    return view('/login');
});


Route::get('/about', function () {
    //return view('welcome');
    return view('about');
});

Route::get('/dashboard', function () {
    //return view('welcome');
    return view('dashboard');
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

Route::get('/artistpage', function () {
    return view('artistpage');
});
