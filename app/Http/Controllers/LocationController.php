<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Mail;
use App\Models\Mailinbox;

use App\Models\Locations;


use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller {

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $response=array();
        $response['list']=Locations::orderBy('id', 'DESC')->paginate(10);
        if (request('term')) {

            $response['list'] = DB::table('locations')
            ->where('location_title','like',"%".request('term')."%")
            ->get();

        }
        return View('admin.locations.index',$response);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $roles = DB::table('roles')->get();

        // $data['roles'] = $roles;
        // return view('createUser', $data);
        return view('admin.locations.new', compact('roles'));

    }

    
    public function store(Request $request) 
    {
        // dd($request->all());
        //
        $rules = [
            'location_title' => 'required',
            
        ];
        $request->validate($rules);

        $add = new Locations;
        $add->location_title = $request->location_title;
       
        $add->save();

        

        return redirect('location')->with('success', 'Location Add Succesfully');
    }

    

    public function edit(Request $request, $id) {
        //
        $response['detail'] = Locations::find($id);

        // dd($user);
        return view('admin.locations.show', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        //
        $rules = [
            'location_title' => 'required',
            
        ];
        $request->validate($rules);
        $update=Locations::find($request->id);
        $update->location_title=$request->location_title;
        $update->save();
         

        return redirect('location')->with('success', 'Location Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    


    public function destroy(Request $request, $id)
    {
        Locations::where('id', $id)->delete();

        return redirect('location')->with('success','Location deleted successfully');
    }



    
  

}
