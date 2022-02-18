<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mailinbox extends Model
{
    
    public $table = 'cemetery360_inbox';

    protected $dates = [
        'created_at',
        'updated_at',
      
    ];

   

}
