<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

    function service() {
        return view('admin.dichvu');
    }

    function team() {
        return view('admin.DoiCuuHo');
    }

    function task() {
        return view('admin.NhiemvuCuuHo');
    }

    function news() {
        return view('admin.Tintuc');
    }
}
