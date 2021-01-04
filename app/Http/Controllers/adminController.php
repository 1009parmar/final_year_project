<?php

namespace App\Http\Controllers;

use App\Models\master;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use App\Models\branch;
use UxWeb\SweetAlert\SweetAlert;


class adminController extends Controller
{
    public function login(Request $request)
    {
        // $admin  = new admin();
        $admin_id = $request->input('admin_id');
        $password = $request->input('password');

        $admin  = DB::table('master')->where('admin_id', $admin_id)->first();
        if ($admin->admin_id == $admin_id && $admin->password == $password) {
            return view('master\admin_home');
        } else {
            return view('index')->with('anvalid_admin', 'Invalid Admin_id OR Password');
        }
    }

    public function add_staff()
    {
        $alldata = branch::all();
        return view('master/staff/add_staff')->with('alldata', $alldata);
    }

    public function add_staff_submit(Request $request)
    {

        $staff  = new Staff();
        $staff->f_name = $request->input('f_name');
        $staff->l_name = $request->input('l_name');
        $staff->email = $request->input('email');
        $staff->join_date = $request->input('join_date');
        $staff->password = $request->input('password');
        $staff->c_password = $request->input('c_password');
        $staff->m_number = $request->input('m_number');
        $staff->gender = $request->input('gender');
        $staff->designation = $request->input('designation');
        $staff->department = $request->input('department');
        $staff->dob = $request->input('dob');
        $staff->qualification = $request->input('qualification');
        $staff->experience = $request->input('experience');
        $staff->interest = $request->input('interest');
        $staff->address = $request->input('address');


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/staff/', $filename);
            $staff->photo = $filename;
        } else {
            return $request;
            $staff->photo = '';
        }

        $staff->save();

        return redirect('/add_staff')->with('staff_created', 'staff has been created.....!');
    }

    public function all_staff()
    {

        $alldata = Staff::all();
        return view('master/staff/all_staff')->with('alldata', $alldata);
    }

    public function edit_staff_home()
    {

        $alldata = Staff::all();
        return view('master/staff/edit_staff_home')->with('alldata', $alldata);
    }

    public function edit_staff($id)
    {
        $staff = DB::table('staff')->where('id', $id)->first();
        return view('master/staff/edit_staff', compact('staff'));
    }

    public function update_staff(Request $request)
    {
        $id = $request->get('id');
        $update = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'join_date' => $request->join_date,
            'password' => $request->password,
            'c_password' => $request->c_password,
            'm_number' => $request->m_number,
            'gender' => $request->gender,
            'designation' => $request->designation,
            'department' => $request->department,
            'dob' => $request->dob,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'interest' => $request->interest,
            'address' => $request->address,
        ];
        if ($files = $request->file('photo')) {
            $destinationPath = 'upload/staff/'; // upload path
            $profileImage = time() . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['photo'] = "$profileImage";
        }
        staff::where('id', $id)->update($update);
        return redirect('/edit_staff_home');
    }

    public function delete_staff($id)
    {
        staff::where('id', $id)->delete();
        return Redirect('/edit_staff_home')->with('success', 'Product deleted successfully');
    }





    public function add_branch()
    {
        return view('master/branch/add_branch');
    }

    public function add_branch_submit(Request $request)
    {
        $branch  = new branch();
        $branch->b_name = $request->input('b_name');
        $branch->seats = $request->input('seats');
        $branch->save();
        return redirect('/add_branch')->with('branch_created', 'branch has been created.....!');
    }

    public function view_branch()
    {
        $alldata = branch::all();
        return view('master/branch/view_branch')->with('alldata', $alldata);
    }

    public function edit_branch_home()
    {

        $alldata = branch::all();
        return view('master/branch/edit_branch_home')->with('alldata', $alldata);
    }

    public function edit_branch($id)
    {
        $branch = DB::table('branch')->where('id', $id)->first();
        return view('master/branch/edit_branch', compact('branch'));
    }

    public function update_branch(Request $request)
    {
        $id = $request->get('id');
        $update = [
            'b_name' => $request->b_name,
            'seats' => $request->seats,
        ];

        branch::where('id', $id)->update($update);
        return redirect('/edit_branch_home');
    }

    public function delete_branch(Request $request, $id)
    {
        branch::where('id', $id)->delete();
        return Redirect('/edit_branch_home');
    }
}