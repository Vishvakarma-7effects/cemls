<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class CemeteryUser extends Model
{
    public $table = 'cemeteries_users';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'cemetery_id',
        'user_id',
        'created_at',
        'updated_at',
        'status'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
