<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Mail;
use App\Models\Mailinbox;

use App\Models\Tags;


use Illuminate\Support\Facades\Redirect;

class TagsController extends Controller {

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $response=array();
        $response['list']=Tags::orderBy('id', 'DESC')->paginate(10);
        if (request('term')) {

            $response['list'] = DB::table('tags')
            ->where('tag','like',"%".request('term')."%")
            ->get();

        }
        return View('admin.tags.index',$response);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        return view('admin.tags.new');

    }

    
    public function store(Request $request) 
    {
        // dd($request->all());
        //
        $rules = [
            'tag' => 'required',
            
        ];
        $request->validate($rules);

        $add = new Tags;
        $add->tag = $request->tag;
       
        $add->save();

        

        return redirect('tag')->with('success', 'Tag Add Succesfully');
    }

    

    public function edit(Request $request, $id) {
        //
        $response['detail'] = Tags::find($id);

        // dd($user);
        return view('admin.tags.show', $response);
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
            'tag' => 'required',
            
        ];
        $request->validate($rules);
        $update=Tags::find($request->id);
        $update->tag=$request->tag;
        $update->save();
         

        return redirect('tag')->with('success', 'Tag Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    


    public function destroy(Request $request, $id)
    {
        Tags::where('id', $id)->delete();

        return redirect('tag')->with('success','Tag deleted successfully');
    }



    
  

}
