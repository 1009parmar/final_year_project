<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    protected $table = 'assignment';
    protected $fillable = ['f_name', 'semester', 'a_name', 'due_date', 'file'];
}
