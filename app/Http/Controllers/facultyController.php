<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Staff;

class facultyController extends Controller
{
    public function viewfaculty()
    {
        return view("people/faculty/faculty");
    }

    public function login(Request $request)
    {
        // $admin  = new admin();
        $email = $request->input('email');
        $password = $request->input('password');



        $alldata  = DB::table('staff')->where('email', $email)->first();
        if ($alldata->email == $email && $alldata->password == $password) {
            return view('faculty/faculty_home')->with('alldata', $alldata);
        } else {
            return view('login/login')->with('anvalid_faculty', 'Invalid Email ID OR Password');
        }
    }

    public function add_company()
    {
        return view('faculty/placement/add_company');
    }

    public function add_student()
    {
        return view('faculty/student/add_student');
    }
}