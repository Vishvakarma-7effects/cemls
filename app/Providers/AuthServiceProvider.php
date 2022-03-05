<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use Laravel\Passport\Passport; // add this 


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {


        $this->registerPolicies();
        Passport::routes(); // Add this
       
        $roles = Role::with('permissions')->get();
        // dd($roles);
        $permissionsArray = [];

        foreach ($roles as $role) {
            foreach ($role->permissions as $permissions) {
                $permissionsArray[$permissions->name][] = $role->id;
            }
        }

        foreach ($permissionsArray as $name => $roles) {
            // dd($name);
            Gate::define($name, function ($user) use ($roles) {
                // return count(array_intersect($user->role->pluck('id')->toArray(), $roles)) > 0;
                return count(array_intersect([$user->userrole], $roles)) > 0;
            });
        }
    }
}
