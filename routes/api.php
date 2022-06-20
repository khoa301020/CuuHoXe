<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
use App\Models\Task;
use App\Models\Team;
use App\Models\Accident;
use App\Models\TeamMember;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| User API Routes
|--------------------------------------------------------------------------
*/

// Get all users
Route::get('/user/all', function () {
    return User::all();
});

// Get user by username, phone, email
Route::get('/user/get', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->username)
        ->orWhere('email', $request->username)
        ->first();
    return $user ? $user : [];
});

// Create new user
Route::post('/user/create', function (Request $request) {
    $user = new User;
    $user->username = $request->username;
    $user->password = $request->password;
    $user->hoVaTen = $request->hoVaTen;
    $user->ngaySinh = $request->ngaySinh;
    $user->soDienThoai = $request->soDienThoai;
    $user->email = $request->email;
    $user->idVaiTro = $request->idVaiTro;
    $user->save();
    return $user;
});

// Update user info by username, phone, email
Route::put('/user/update', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->soDienThoai)
        ->orWhere('email', $request->email)
        ->first();
    $user->hoVaTen = $request->hoVaTen;
    $user->ngaySinh = $request->ngaySinh;
    $user->soDienThoai = $request->soDienThoai;
    $user->email = $request->email;
    $user->save();
    return $user;
});

// Delete user by username, phone, email
Route::delete('/user/delete', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->soDienThoai)
        ->orWhere('email', $request->email)
        ->first();
    $user->delete();
    return $user;
});

// Deactivate user by username, phone, email
Route::put('/user/deactivate', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->soDienThoai)
        ->orWhere('email', $request->email)
        ->first();
    $user->trangThaiHoatDong = 0;
    $user->save();
    return $user;
});

// Activate user by username, phone, email
Route::put('/user/activate', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->soDienThoai)
        ->orWhere('email', $request->email)
        ->first();
    $user->trangThaiHoatDong = 1;
    $user->save();
    return $user;
});

/*
|--------------------------------------------------------------------------
| Roles API Routes
|--------------------------------------------------------------------------
*/

// Get all roles
Route::get('/role/all', function () {
    return Role::all();
});

// Get all users by role id
Route::get('/role/users', function (Request $request) {
    return User::where('idVaiTro', $request->idVaiTro)->get();
});

// Create new role
Route::post('/role/create', function (Request $request) {
    $role = new Role;
    $role->tenVaiTro = $request->tenVaiTro;
    $role->moTa = $request->moTa;
    $role->save();
    return $role;
});

// Set role for user
Route::put('/role/set', function (Request $request) {
    $user = User::where('username', $request->username)
        ->orWhere('soDienThoai', $request->username)
        ->orWhere('email', $request->username)
        ->first();
    $user->idVaiTro = $request->idVaiTro;
    $user->save();
    return $user;
});

// Delete role by id
Route::delete('/role/delete', function (Request $request) {
    $role = Role::find($request->idVaiTro);
    $role->delete();
    return $role;
});

/*
|--------------------------------------------------------------------------
| Teams and Team Members API Routes
|--------------------------------------------------------------------------
*/

// Get all teams
Route::get('/team/all', function () {
    return Team::all();
});

// Get all users by team id
Route::get('/team/users', function (Request $request) {
    //return User from TeamMember with idDoiCuuHo
    $teamMember =  TeamMember::where('idDoiCuuHo', $request->idDoiCuuHo)->get();
    $users = [];
    foreach ($teamMember as $member) {
        $user = User::find($member->idNguoiDung);
        array_push($users, $user);
    }
    return $users;
});

// Create new team
Route::post('/team/create', function (Request $request) {
    $team = new Team;
    $team->tenDoiCuuHo = $request->tenDoiCuuHo;
    $team->save();
    return $team;
});

// Add user to team
Route::post('/team/add', function (Request $request) {
    // $team = Team::where('tenDoiCuuHo', $request->tenDoiCuuHo)->first();
    // $user = User::where('username', $request->username)
    //     ->orWhere('soDienThoai', $request->username)
    //     ->orWhere('email', $request->username)
    //     ->first();
    $teamMember = new TeamMember;
    $teamMember->idDoiCuuHo = $request->idDoiCuuHo;
    $teamMember->idNguoiDung = $request->idNguoiDung;
    $teamMember->save();
    return $teamMember;
});

// Remove user from team
Route::delete('/team/remove', function (Request $request) {
    $teamMember = TeamMember::where('idNguoiDung', $request->idNguoiDung)
        ->first();
    $teamMember->delete();
    return $teamMember;
});

/*
|--------------------------------------------------------------------------
| Accidents API Routes
|--------------------------------------------------------------------------
*/

// Get all accidents
Route::get('/accident/all', function () {
    return Accident::all();
});

// Create new accident
Route::post('/accident/create', function (Request $request) {
    $accident = new Accident;
    $accident->idNguoiDung = $request->idNguoiDung;
    $accident->viTri = $request->viTri;
    $accident->loaiPhuongTien = $request->loaiPhuongTien;
    $accident->minhChung = $request->minhChung;
    $accident->thoiGianGui = Carbon::now();
    $accident->save();
    return $accident;    
});

// Distribute accident to Team by Team id
Route::post('/accident/distribute', function (Request $request) {
    $accident = Accident::where('idSuCo', $request->idSuCo)->first();
    $task = new Task;
    $task->idSuCo = $accident->idSuCo;
    $task->idDoiCuuHo = $request->idDoiCuuHo;
    $task->ThoiGianNhan = Carbon::now();
    $task->save();
    $accident->trangThaiSuCo = "Đã tiếp nhận";
    $accident->save();
    return array($accident, $task);
});

// Reject accident by accident id
Route::post('/accident/reject', function (Request $request) {
    $accident = Accident::where('idSuCo', $request->idSuCo)->first();
    $accident->trangThaiSuCo = "Không được tiếp nhận";
    $accident->save();
    return $accident;
});

/*
|--------------------------------------------------------------------------
| Tasks API Routes
|--------------------------------------------------------------------------
*/

// Get all tasks 
Route::get('/task/all', function () {
    return Task::all();
});

// Get all tasks by idDoiCuuHo
Route::get('/task/get', function (Request $request) {
    return Task::where('idDoiCuuHo', $request->idDoiCuuHo)->get();
});

// Update trangThaiNhiemVu
Route::put('/task/status', function (Request $request) {
    $task = Task::where('idNhiemVu', $request->idNhiemVu)->first();
    $task->trangThaiNhiemVu = $request->trangThaiNhiemVu;
    $task->save();
    return $task;
});

// Delete task by task id
Route::delete('/task/delete', function (Request $request) {
    $task = Task::where('idNhiemVu', $request->idNhiemVu)->first();
    $task->delete();
    return $task;
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
