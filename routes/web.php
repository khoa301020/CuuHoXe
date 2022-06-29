<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Middleware\AuthCheck;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
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
Route::group(['middleware' => 'authCheck'], function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

    Route::get('/user/request', [UserController::class, 'request'])->name('user.request');

    Route::get('/user/request/detail', [UserController::class, 'requestDetail'])->name('user.detail');

    Route::get('/user/password', [UserController::class, 'password'])->name('user.password');

    Route::get('/user/requestPage', [UserController::class, 'requestPage'])->name('user.requestPage');
});

// login
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/login/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::post('/auth/createUser', [AuthController::class, 'createUser'])->name('auth.createUser');

// admin
Route::group(['middleware' => ['authorization']], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/service', [AdminController::class, 'service'])->name('admin.service');

    Route::get('/admin/team', [AdminController::class, 'team'])->name('admin.team');

    Route::get('/admin/task', [AdminController::class, 'task'])->name('admin.task');

    Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news');

    Route::get('/admin/team/delete', [AdminController::class, 'deleteTeam'])->name('admin.team.delete');
});

//Route::get('/login','LoginController@index');