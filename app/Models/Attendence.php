<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $table="excel";
    protected $fillable = [
        'user_id',
        'name',
        'date',
        'first_in',
        'last_out',
        'in_device',
        'out_device',
        'total_hours100',
        'Month',
        'year',

    ];
}
