<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_Emp extends Model
{
    use HasFactory;
    protected $table="sheet1";
    protected $fillable = [
        'Empid',
        'Name',
        'Shift',
        'Branch',
        'status',
       
    ];
}
