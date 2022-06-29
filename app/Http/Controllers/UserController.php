<?php

namespace App\Http\Controllers;
use App\Models\Accident;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile()
    {
        return view('pages.user.profile');
    }

    function request()
    {
        // get all accident this user by id from session
        $id = session()->get('LoggedUser')->idNguoiDung;
        $accidents = Accident::where('idNguoiDung', $id)->get();

        return view('pages.user.request')->with('accidents', $accidents);
    }

    function requestDetail()
    {
        return view('pages.user.detail');
    }

    function requestPage()
    {
        return view('pages.request');
    }

    function password()
    {
        return view('pages.user.password');
    }
}
