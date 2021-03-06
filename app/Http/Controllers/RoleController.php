<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role as Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Permission;

use Gate;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() 
    {
        // dd(Auth::user()->hasRole(1));

        $this->middleware('auth');
        $this->middleware(function ($request, $next) 
        {
            
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });
        

        // $permssion_slug = 'role_user';
        // $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
        // $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
        // $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    }


    public function index() 
    {
    	abort_if(Gate::denies('role_list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::select('id', 'name','guard_name')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();
        // dd($roles);
        // return view('showRole', $data);
        return view('admin.roles.index', compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
    	abort_if(Gate::denies('role_add'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         $permissions = DB::table('permissions')->get();

                // dd($permissions);
        return view('admin.roles.new',compact('permissions'));
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


    public function store(Request $request) 
    {

        $request->validate([
            'name' => 'required',
            // 'guard_name' => 'required'
        ]);

        // dd($request->input('name'));

        $role = Role::create(['name'=>$request->input('name')]);
        // $role->name = $request->name;
        $permissions= $request->input('permissions');
        // $role->guard_name = $request->guard_name;
        //  $isStored = $role->save();
        if($role){
            foreach ($permissions as $perKey => $perValue) {
            DB::table('role_has_permissions')->insert(['role_id'=>$role->id,'permission_id'=>$perValue]);
            }
        }


        return redirect()->route('roles.index')->with('success', 'Role Add Succesfully');
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
    public function edit(Role $role)
    {
    	abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $roles = Role::with(['permissions'])->find($id);
        $role->load('permissions');

        // dd($role);
        $permissions = DB::table('permissions')->get();

        return view('admin.roles.edit', compact('role','permissions'));
    }


    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            // 'guard_name' => 'required'
        ]);

        $role = Role::findOrFail($request->id);
        $role->name = $request->name;
        // $role->guard_name = $request->guard_name;
        $role->save();
        $role->permissions()->sync($request->input('permissions', []));
        return redirect()->route('roles.index')->with('success', 'Role Updated Succesfully');
    }
    public function destroy($id) 
    {
    	abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Role = Role::findOrFail($id);

        $Role->delete();
        
        return redirect()->route('roles.index')->with('success', 'Role Deleted Succesfully');;
    }

}
