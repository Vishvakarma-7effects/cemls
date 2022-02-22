<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mail;
use App\Models\Mailinbox;

use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {

    // function __construct() {
    //     $permssion_slug = 'role_user';
    //     $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       
        //$users = User::orderBy('id','DESC')->get();
        //$data['users'] = $users;
       
        //return view('admin.users.index', compact('users'));
        $users = User::orderBy('id', 'DESC')->paginate(10);
        if (request('term')) {

     $users = DB::table('users')
            ->where('name','like',"%".request('term')."%")->orWhere('email', 'like' , '%'. request('term') .'%')->get();

        }
   return View('admin.users.index')
               ->with('users', $users);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $roles = DB::table('roles')->get();

        $data['roles'] = $roles;
        // return view('createUser', $data);
        return view('admin.users.new', compact('roles'));

    }

    
    public function store(Request $request) 
    {
        // dd($request->all());
        //
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ];
        $request->validate($rules);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
          $user->feature = $request->feature; 

        if($request->file('profile_image'))
        {
            $file = $request->file('profile_image'); // input name
            $destinationPath = 'uploads'; 
            $file->move($destinationPath,$file->getClientOriginalName()); // get this is orignal file name
            $image = $file->getClientOriginalName();

            $user->profile_image = $image;
        
        }

        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->role);

        //return redirect('events');

        return redirect()->route('users.index')->with('success', 'User Add Succesfully');
    }

    public function show(User $user) {
        //
    }

    public function edit(User $user) {
        //
        $roles = DB::table('roles')->get();

        // dd($user);
        return view('editUser', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user) {
        //

         if($request->file('profile_image'))
        {
            $file = $request->file('profile_image'); // input name
            $destinationPath = 'uploads'; 
            $file->move($destinationPath,$file->getClientOriginalName()); // get this is orignal file name
            $image = $file->getClientOriginalName();

            $user->profile_image = $image;
        
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->update();

        $user->removeRole($request->old_role);
        $user->assignRole($request->role);

        return redirect()->route('user.index')->with('success', 'User Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user) {
    //     $user->delete();

    //     return redirect()->route('user.index')
    //                     ->with('success', 'User deleted successfully');
    // }
    public function delete(User $user)
    // { 
    //     dd($user);
    //     $data=User::where('id',$id)->delete();
    //     return Redirect::to('user.index')->with('message', 'User Deleted Sucessfully');
    // }
    {
        dd($user);
        $user->delete();

   return redirect()->route('user.index')
                   ->with('success','User deleted successfully');

    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

// My Account

    public function profile() {
        //
        // dd(Auth::user());
        $user = Auth::user();
        $data['user'] = $user;

        //dd($data);
        //echo $events; 
        // return view('accountDetails', $data);
        return view('admin.users.myAccount',compact('user'));
        
    }

    public function updateProfile(Request $request) 
    {
        // dd($request->all());
        if (!empty($request->password))
        {
            $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);
        } 
        

        $user = Auth::user();


        if($request->file('profile_image'))
        {
            // dd(333);
            $file = $request->file('profile_image'); // input name
            $destinationPath = 'uploads'; 
            $file->move($destinationPath,$file->getClientOriginalName()); // get this is orignal file name
            $image = $file->getClientOriginalName();

            $user->profile_image = $image;
        
        }
        if($request->address_line1)
        {
            $user->address_line1 = $request->address_line1;

        }
        if($request->address_line2)
        {
            $user->address_line2 = $request->address_line2;

        }
        if($request->city)
        {
            $user->city = $request->city;

        }

        if($request->state)
        {
            $user->state = $request->state;

        }
        if($request->file('zip'))
        {
            $user->zip = $request->zip;

        }
    

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->update();

        return redirect('user/profile')->with('success', 'Profile Updated');
    }
    
    public function getEdit($id)
    {
        $users = User::where('id',$id)->first();
        return view('admin.users.getEdit',compact('users'));
    }
    public function updateUser(Request $request) 

    {
        // dd($request->all());
        if(!isset($request->new_password))
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);            
        }
        else
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ]);
        }

        

        $users = User::findOrFail($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        if(isset($request->password))
        {
            $pass = Hash::make($request->password);
            $users->password = $pass;           
        }

        if($request->file('profile_image'))
        {
            $file = $request->file('profile_image'); // input name
            $destinationPath = 'uploads'; 
            $file->move($destinationPath,$file->getClientOriginalName()); // get this is orignal file name
            $image = $file->getClientOriginalName();

            $users->profile_image = $image;
        
        }

        $users->save();
                
        return redirect()->route('users.index')->with('success', 'User Updated Succesfully');

    }
    public function mailbox(){


       
           $cemetery360_inboxs = Mailinbox::orderBy('id', 'DESC')->paginate(10);
    
        return View('admin.mailbox')->with('cemetery360_inboxs', $cemetery360_inboxs);

        //return view('admin.mailbox',compact('mails'));
    }

     public function storeMail(StoreMailRequest $request)
        {
                $request->merge(['created_by'=>auth()->user()->id,'status'=>'SEND']);
                // $request->input('type')='invitation';
                // dd($request->all());

                $invite = Mail::all();
                if($invite){
                        if($request->input('type')=='INVITATION'){
                                $checkUser=User::where(['email'=>$request->input('email')])->get();

                                // dd($checkUser);
                                if(count($checkUser)<1){
                                        
                                        $a=User::create([
                                                'email'=>$request->input('email'),'type'=>'INVITATED','status'=>'INVITATED'
                                        ]);
                                        // dd($a);
                                }
                        }
                        session()->flash('message', 'Mail Successfully Sent');
                }
                return redirect()->url('mailBox');
        }
      public function updateFeature(Request $request) {

          $cemetery = User::where('id',$request->event_id)->update([
                        'feature'=>$request->value,
                       
                ]);
        

        $response['status'] = true;
        $response['msg'] = 'Upadted';

        return response()->json($response, 200);
    }
  

}
