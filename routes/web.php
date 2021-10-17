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

Route::get('/index.html', function () {
    return view('home');
});

Route::get('/about.html', function () {
    return view('doctor');
});

Route::get('/service.html', function () {
    return view('riwayat');
}); 

Route::get('/contact.html', function () {
    return view('event');
}); 

Route::get('/appoinment.html', function () {
    return view('konten1');
}); 

Route::get('/department-single.html', function () {
    return view('event1');
}); 