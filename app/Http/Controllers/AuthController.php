<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.registration');
    }

    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $userInfo = User::where('username', $request->username)->first();

        if (!$userInfo) {
            return back()->with('fail', 'Login failed');
        } else {
            //check password
            // if (Hash::check($request->password, $userInfo->password)) {
            if ($request->password == $userInfo->password) {
                $request->session()->put('LoggedUser', $userInfo);
                if ($userInfo->idVaiTro == 'VT001') {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('home');
                }
            } else {
                // return back()->with('fail', 'Incorrect password');
                return back()->with('fail', 'Login failed');
            }
        }
    }

    function createUser(Request $request) {
        //Validate request
        $request->validate([
            'username' => 'required',
            'pass' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birthday' => 'required',
        ]);

        //Check if username exists
        $userInfo = User::where('username', $request->username)->first();
        if ($userInfo) {
            return back()->with('fail', 'Username already exists');
        }

        //Check if email exists
        $userInfo = User::where('email', $request->email)->first();
        if ($userInfo) {
            return back()->with('fail', 'Email already exists');
        }

        //Check if phone exists
        $userInfo = User::where('soDienThoai', $request->phone)->first();
        if ($userInfo) {
            return back()->with('fail', 'Phone already exists');
        }

        //Check if confirm password matches password    
        if ($request->pass != $request->passConfirm) {
            return back()->with('fail', 'Password does not match');
        }

        //Create user
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->pass;
        $user->hoVaTen = $request->name;
        $user->ngaySinh = $request->birthday;
        $user->soDienThoai = $request->phone;
        $user->email = $request->email;
        $user->idVaiTro = "VT002";

        Alert::success('Success', 'User created successfully');

        $user->save();        

        return redirect('/login');
    }

    function logout(Request $request)
    {
        $request->session()->forget('LoggedUser');
        Alert::success('Success', 'Logout success!');
        return redirect('/');
    }
}
