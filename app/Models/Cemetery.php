<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cemetery extends Model
{
  public $table = "cemetery"; 
	use HasFactory;
  public $timestamps = false;

    protected $fillable = [
        'cemetery_name'
    ];
}
