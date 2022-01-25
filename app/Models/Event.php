<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model {

    use HasFactory;

    protected $fillable = ['title'];

    public function getEventById($id) {

        return DB::table('events')->get();
    }

}
