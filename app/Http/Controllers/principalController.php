<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalController extends Controller
{
    public function viewprincipal(){
        return view("people/principal/principal");
    }
}
