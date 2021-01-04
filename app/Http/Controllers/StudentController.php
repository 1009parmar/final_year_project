<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add_student_submit(Request $request)
    {
        $student  = new Student();
        $student->f_name = $request->input('f_name');
        $student->l_name = $request->input('l_name');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->c_password = $request->input('c_password');
        $student->m_number = $request->input('m_number');
        $student->gender = $request->input('gender');
        $student->dob = $request->input('dob');
        $student->address = $request->input('address');


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/student/', $filename);
            $student->photo = $filename;
        } else {
            return $request;
            $student->photo = '';
        }

        $student->save();

        return redirect('/add_student')->with('student_created', 'student has been created.....!');
    }

    public function view_student_faculty()
    {
        $alldata = Student::all();
        return view('faculty/student/view_student')->with('alldata', $alldata);
    }

    public function edit_student_home()
    {
        $alldata = student::all();
        return view('faculty/student/edit_student_home')->with('alldata', $alldata);
    }

    public function edit_student($id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return view('faculty/student/edit_student', compact('student'));
    }

    public function update_student(Request $request)
    {
        $id = $request->get('id');
        $update = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'password' => $request->password,
            'c_password' => $request->c_password,
            'm_number' => $request->m_number,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
        ];
        if ($files = $request->file('photo')) {
            $destinationPath = 'upload/student/'; // upload path
            $profileImage = time() . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['photo'] = "$profileImage";
        }
        student::where('id', $id)->update($update);
        return redirect('/edit_student_home');
    }

    public function delete_student($id)
    {
        student::where('id', $id)->delete();
        return Redirect('/edit_student_home')->with('success', 'Product deleted successfully');
    }
}