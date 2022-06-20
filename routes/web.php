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
<<<<<<< HEAD
Route::get('/','HomeController@index');
// Route::get('/', function () {
//     return view('pages.home');             
// });
Route::get('/trang-chu','HomeController@index');
//Route::get('/', function () {
    //return view('main');
//});
=======

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('registration');
});
>>>>>>> 35670cba824ad593e4cdb5b46b71bb4504561d1b
Route::get('/login', function () {
    return view('login');             
});
//Route::get('/login','LoginController@index');