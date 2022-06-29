<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
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
        return view('admin.DoiCuuHo')->with('teams', Team::all());
    }

    function task() {
        return view('admin.NhiemvuCuuHo')->with('tasks', Task::all());
    }

    function news() {
        return view('admin.Tintuc');
    }

    function deleteTeam(Request $request) 
    {
        $team = Team::where('idDoiCuuHo', $request->id)->first();
        $team->delete();
        return back();
    }
}
