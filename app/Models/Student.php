<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['f_name', 'l_name', 'email', 'password', 'c_password', 'm_number', 'gender',  'dob',  'address', 'photo'];

}
