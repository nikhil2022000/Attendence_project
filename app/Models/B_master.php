<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B_master extends Model
{
    use HasFactory;
    protected $table="_bmaster_tabel";
    protected $fillable = [
    
        'Branch',
       

    ];
}
