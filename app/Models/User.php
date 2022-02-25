<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable {

    use HasFactory,
        Notifiable,
        HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'zip',
        'email_verified_at',
        'remember_token',
        'created_at',
        'created_by',
        'updated_at',
        'deleted_at',
        'status',
        'profile_image',
        'type',
        'password',
        'userrole',
        'password',
        'feature',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    
    protected $dates = [
        'email_verified_at',
        'verified_at',
        'created_at',
        'joining_date',
        'date_of_birth',
        'exit_date',
        'updated_at',
        'deleted_at',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class,'userrole');
    }

}
