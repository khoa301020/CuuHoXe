<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile()
    {
        return view('pages.user.profile');
    }

    function request()
    {
        return view('pages.user.request');
    }

    function requestDetail()
    {
        return view('pages.user.detail');
    }

    function password()
    {
        return view('pages.user.password');
    }
}
