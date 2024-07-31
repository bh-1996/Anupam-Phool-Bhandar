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
    return view('website.layouts.index');
});
Route::get('/about', function () {
    return view('website.pages.about');
});
Route::get('/contact', function () {
    return view('website.pages.contact');
});
Route::get('/gallery', function () {
    return view('website.pages.gallery');
});
Route::get('/login', function () {
    return view('website.pages.login');
});

