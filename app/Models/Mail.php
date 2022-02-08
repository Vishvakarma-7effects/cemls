<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    // use HasFactory;
     use SoftDeletes;

    public $table = 'mails';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'email',
        'type',
        'status',
        'message',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
