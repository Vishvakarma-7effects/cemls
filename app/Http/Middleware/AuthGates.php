<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        // dd($user);
        if ($user) {
                // dd("hy");

            $roles     = Role::with(['permissions'])->get();
            // dd($roles);
            
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->name][] = $role->id;
                }
            }
// dd($permissionsArray);
            foreach ($permissionsArray as $title => $roles) {
                // dd($title);
                Gate::define($title, function (\App\Models\User $user) use ($roles) {
                    // dd($user->role);
                    return count(array_intersect($user->role->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }

        return $next($request);
    }
}
