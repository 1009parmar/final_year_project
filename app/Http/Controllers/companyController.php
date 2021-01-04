<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function add_company_submit(Request $request)
    {

        $company  = new Company();
        $company->c_name = $request->input('c_name');
        $company->website = $request->input('website');
        $company->type = $request->input('type');
        $company->status = $request->input('status');
        $company->phone = $request->input('phone');
        $company->address = $request->input('address');
        $company->save();
        return redirect('/add_company')->with('company_created', 'company has been created.....!');
    }

    public function view_company_faculty()
    {
        $alldata = company::all();
        return view('faculty/placement/view_company')->with('alldata', $alldata);
    }

    public function view_company_admin()
    {
        $alldata = company::all();
        return view('master/placement/view_company')->with('alldata', $alldata);
    }
}
