<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function index() {
        $sb_menu = "dashboard";

        return view('admin.home', compact('sb_menu'));
    }
}
