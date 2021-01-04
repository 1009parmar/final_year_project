<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = 'company';
    protected $fillable = ['c_name', 'website', 'type', 'status', 'phone', 'address'];
}
