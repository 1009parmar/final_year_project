<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function sendfeedback(){
        return view("feedback/feedback");
    }
}
