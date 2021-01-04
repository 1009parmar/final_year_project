<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $table = 'branch';
    protected $fillable = ['b_name', 'seats'];
}
