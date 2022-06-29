<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
                // $request->session()->put('LoggedUser', $userInfo->id);
                return back()->with('success', 'Login success');
            } else {
                // return back()->with('fail', 'Incorrect password');
                return back()->with('fail', 'Login failed');
            }
        }
    }
}
