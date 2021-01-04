<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['f_name', 'l_name', 'email', 'join_date', 'password', 'c_password', 'm_number', 'gender', 'designation', 'department', 'dob', 'qualification', 'qualification', 'interest', 'address', 'photo'];
}