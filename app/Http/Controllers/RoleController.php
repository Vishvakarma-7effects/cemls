<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });

        $permssion_slug = 'role_user';
        $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    }


    public function index() {
        $roles = Role::select('id', 'name')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();
        // return view('showRole', $data);
        return view('admin.roles.index', compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('createRole');
    }

    public function assignRole($roleId) {
        $permission_group = DB::table('permission_group')->get();

        $permissions = [];
        foreach ($permission_group as $value) {
            $permissions[$value->name] = DB::table('permissions')
                    ->select('id', 'name')
                    ->where('name', 'like', "%$value->name%")
                    ->orderBy('id', 'asc')
                    ->get();
        }
        $data['permissions'] = $permissions;
        $data['role_id'] = $roleId;
        $data['role_model'] = new Role();

        return view('assignRole', $data);
    }

    public function savePermission($roleId, Request $request) {
        $role = Roles::findById($roleId);
        $roleHasPermissions = DB::table('role_has_permissions')
                ->select('permission_id')
                ->where('role_id', $roleId)
                ->get();
        $roleHasPermission_array = [];
        foreach ($roleHasPermissions as $value) {
            $roleHasPermission_array[] = $value->permission_id;
        }
        $permission = $request->permission;
        $array_delete = array_diff($roleHasPermission_array, $permission);

        $array_insert = array_diff($permission, $roleHasPermission_array);

        foreach ($array_insert as $insert) {
            $role->givePermissionTo($insert);
        }

        foreach ($array_delete as $key => $delete) {
            $role->revokePermissionTo($delete);
        }

        return redirect()->route('role.index')->with('success', 'Permission assigned succesfuuly');
    }


    public function store(Request $request) {
        //
        $rules = [
            'name' => 'required'
        ];
        $request->validate($rules);

        $role = Roles::create(['name' => strtolower($request->name)]);

    //        $role = new Role;
    //        $role->name = strtolower($request->name);
    //        $role->save();

        return redirect()->route('role.index')->with('success', 'Role Add Succesfully');
    }


    public function show(Role $role) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) {
        //
        return view('admin.roles.edit', compact('roles'));

        // return view('editRole', compact('role'));
    }


    public function getEdit(Request $request) {

        return view('admin.roles.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role) {
        //
        $rules = [
            'name' => 'required',
        ];

        $request->validate($rules);

        $role->name = $request->name;
        $role->update();

        return redirect()->route('role.index')->with('success', 'Role Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role) {
        //
    }

}
