<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perkuliahancontroller extends Controller
{
    public function jadwalkuliah () {
        $sb_menu = 'perkuliahan';
        $sb_submenu = 'jadwalkuliah';

        return view('admin.perkuliahan.jadwalkuliah', compact('sb_menu', 'sb_submenu'));
    }

    public function jadwalujian () {
        $sb_menu = 'perkuliahan';
        $sb_submenu = 'jadwalujian';

        return view('admin.perkuliahan.jadwalujian', compact('sb_menu', 'sb_submenu'));
    }

    public function absenmahasiswa () {
        $sb_menu = 'perkuliahan';
        $sb_submenu = 'absenmahasiswa';

        return view('admin.perkuliahan.absenmhs', compact('sb_menu', 'sb_submenu'));
    }

    public function nilaimahasiswa () {
        $sb_menu = 'admin.';
        $sb_submenu = 'nilaimahasiswa';

        return view('admin.perkuliahan.nilaimhs', compact('sb_menu', 'sb_submenu'));
    }
}
