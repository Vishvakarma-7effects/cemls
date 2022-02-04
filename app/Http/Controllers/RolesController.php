<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use Redirect;
use Auth;


class RolesController extends Controller
{
    public function manage()
    {        // dd($user);
        $data = Roles::paginate(10);
        return view('roles.manage',compact('data'));
    }
    
    public function add()
    {      
        //   dd($user);
                $permissions = DB::table('permissions')->get();

        return view('roles.add',compact('permissions'));//folder name.blade file
    }

    public function save(Request $req)
    {
        // dd($req->all());
        $data = new Roles;
        $data->name = $req->name;
        $data->guard_name  = $req->guard_name ;
        $data->save(); 
        return Redirect::to('managerole')->with('message', 'Roles save sucessfully'); // redirect to url(shipping)
    }
    public function delete($id)
    { 
        $data = Roles::where('id',$id)->delete();
        return Redirect::to('managerole')->with('message', 'Roles Deleted Sucessfully');
    }
    public function edit($id)
    {
        $data = Roles::find($id);
        return view('roles.edit',compact('data'));//folername.blade file
    }
    public function update(Request $req)
     {
        //  dd($req->all());

        // dd(21121);
        
         $data=Roles::find($req->id);
         $data = new Roles;
         $data->name = $req->name;
         $data->guard_name  = $req->guard_name ;
     
         $data->save();
         return Redirect::to('managerole')->with('message', 'Roles Updated Sucessfully');
     }
     public function view($id)
     {
         $data = Roles::find($id);
         return view('roles.view',compact('data'));
     }

}
