<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view("login/login");
    }

    // public function e(){
    //     exec('F:\Attendance-System\train.exe');
    // }
}