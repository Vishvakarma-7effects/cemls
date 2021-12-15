<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    function __construct() {
        $permssion_slug = 'role_user';
        $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $users = User::all('id', 'name', 'email');
        $data['users'] = $users;
        //echo $events;
        return view('showUser', $data);
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
        return view('createUser', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
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
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->role);

        //return redirect('events');

        return redirect()->route('user.index')->with('success', 'User Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user) {
        //
        $roles = DB::table('roles')->get();

//        dd($user);
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
        $rules = [
            'name' => 'required',
            'password' => 'required|confirmed',
        ];
        $request->validate($rules);

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
    public function destroy(User $user) {
        //
        $user->delete();

        return redirect()->route('user.index')
                        ->with('success', 'User deleted successfully');
    }

    public function profile() {
        //
        $user = Auth::user();
        $data['user'] = $user;

        //dd($data);
        //echo $events;
        return view('accountDetails', $data);
    }

    public function updateProfile(Request $request) {
        if (!empty($request->current_password)) {
            $rules = [
                'name' => 'required',
                'last_name' => 'required',
                'current_password' => [new MatchOldPassword],
                'new_confirm_password' => 'same:new_password'
            ];
        } else {
            $rules = [
                'name' => 'required',
                'last_name' => 'required',
            ];
        }


        $request->validate($rules);

        $user = Auth::user();

        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if (!empty($request->current_password)) {
            $user->password = Hash::make($request->new_password);
        }

        $user->update();

        return redirect('user/profile')->with('success', 'Profile Updated');
    }

}
