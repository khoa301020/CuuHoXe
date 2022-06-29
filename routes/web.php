<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/introduce', function () {
    return view('pages.introduce');
});
Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/request', function () {
    return view('pages.request');
});

// user
Route::get('/user/profile', function () {
    return view('pages.user.profile');
});
Route::get('/user/request', function () {
    return view('pages.user.request');
});
Route::get('/user/request/detail', function () {
    return view('pages.user.detail');
});
Route::get('/user/password', function () {
    return view('pages.user.password');
});

// login
Route::get('/login',[AuthController::class, 'login'])->name('auth.login');

Route::get('/register',[AuthController::class, 'register'])->name('auth.register');

Route::get('/login/success', function () {
    return view('auth.success');
});

Route::get('/login/fail', function () {
    return view('auth.fail');
});

Route::post('/login/check',[AuthController::class, 'check'])->name('auth.check');

// admin
Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/service',[AdminController::class, 'service'])->name('admin.service');

Route::get('/admin/team',[AdminController::class, 'team'])->name('admin.team');

Route::get('/admin/task',[AdminController::class, 'task'])->name('admin.task');

Route::get('/admin/news',[AdminController::class, 'news'])->name('admin.news');

//Route::get('/login','LoginController@index');