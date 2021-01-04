<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Staff;
use Illuminate\Http\Request;

class cources extends Controller
{
    public function viewcource_it()
    {
        $alldata = staff::all()->where('department', 'INFORMATION TECHNOLOGY');
        return view('cources/it')->with('alldata', $alldata);
    }

    public function viewcource_ce()
    {
        $alldata = staff::all()->where('department', 'COMPUTER ENGINEERING');
        return view('cources/ce')->with('alldata', $alldata);
    }
}
