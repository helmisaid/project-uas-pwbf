<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myFirstcontroller extends Controller
{
    public function blank() {
        return view('admin.admin-blank');
    } 

    public function helloworld() {
        echo "Hello World from controller";
    }

    public function withparam($id) {
        echo 'nilai param adalah '.$id;
    }

    public function showmyview() {
        return view('myview');
    }

    public function viewwithdata() {
        $mydata = 10;
        $myarray = array('Wuling', 'Toyota', 'Honda', 'BMW');
        
        return view('folderview.viewdata', ['mydata' => $mydata, 'myarray' => $myarray]);
    }
}
