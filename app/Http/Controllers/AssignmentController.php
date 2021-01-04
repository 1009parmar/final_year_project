<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function view_assignment_faculty()
    {
        $alldata = assignment::all();
        return view('faculty/assignment/view_assignment')->with('alldata', $alldata);
    }

    public function add_assignment()
    {
        return view('faculty/assignment/add_assignment');
    }

    public function upload_assignment(Request $request)
    {
        $assignment  = new assignment();
        $assignment->f_name = $request->input('f_name');
        $assignment->semester = $request->input('semester');
        $assignment->a_name = $request->input('a_name');
        $assignment->due_date = $request->input('due_date');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/assignment/', $filename);
            $assignment->file = $filename;
        } else {
            return $request;
            $assignment->file = '';
        }

        $assignment->save();

        return redirect('/add_assignment')->with('staff_created', 'staff has been created.....!');
    }
    public function download_assignment_faculty($file)
    {
        return response()->download('upload/assignment/' . $file);
    }

    public function edit_assignment_home()
    {
        $alldata = assignment::all();
        return view('faculty/assignment/edit_assignment_home')->with('alldata', $alldata);
    }

    public function edit_assignment($id)
    {
        $assignment = DB::table('assignment')->where('id', $id)->first();
        return view('faculty/assignment/edit_assignment', compact('assignment'));
    }

    public function update_assignment(Request $request)
    {
        $id = $request->get('id');
        $update = [
            'f_name' => $request->f_name,
            'semester' => $request->semester,
            'a_name' => $request->a_name,
            'due_date' => $request->due_date,

        ];
        if ($files = $request->file('file')) {
            $destinationPath = 'upload/assignment/'; // upload path
            $profileImage = time() . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['file'] = "$profileImage";
        }
        assignment::where('id', $id)->update($update);
        return redirect('/edit_assignment_home');
    }

    public function delete_assignment($id)
    {
        assignment::where('id', $id)->delete();
        return Redirect('/edit_assignment_home')->with('success', 'Product deleted successfully');
    }
}