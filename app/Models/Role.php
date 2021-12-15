<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model {

    use HasFactory;

    public function checkRolePermission($role_id, $permission_id) {

        $count = DB::table('role_has_permissions')
                ->where('role_id', $role_id)
                ->where('permission_id', $permission_id)
                ->count();
        return $count;
    }

}
