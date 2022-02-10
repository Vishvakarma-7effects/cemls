<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cemetery extends Model
{
  public $table = "cemetery"; 
  use SoftDeletes;
	use HasFactory;
  public $timestamps = false;

    // protected $fillable = [
    //     'cemetery_name'
    // ];
}
