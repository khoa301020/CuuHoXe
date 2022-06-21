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

Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/introduce', function () {
    return view('pages.introduce');
});
Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/gui_yeu_cau', function () {
    return view('pages.gui_yeu_cau');
});

Route::get('/register', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');             
});
//Route::get('/login','LoginController@index');