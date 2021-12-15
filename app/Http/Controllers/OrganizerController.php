<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });

        $permssion_slug = 'orgnizer';
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
        $data['organizers'] = Organizer::select('id', 'name', 'email', 'description')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();
        return view('showOrgniser', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('createOrgniser');
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
            'image' => 'mimes:jpg,jpeg,png,svg,gif|max:2048'
        ];

        $request->validate($rules);
        $organizer = new Organizer;
        if ($request->file('image')) {
            //For Encrypted file name
            $imageName = $request->file('image')->store('organizers', 'public');
            $organizer->image = $imageName;
        }

        $organizer->name = $request->name;
        $organizer->email = $request->email;
        $organizer->description = $request->description;
        $organizer->website = $request->website;
        $organizer->fb = $request->fb;
        $organizer->instagram = $request->instagram;
        $organizer->youtube = $request->youtube;
        $organizer->created_by = $this->userId;
        $organizer->save();

        return redirect()->route('organizers.index')->with('success', 'Organizer Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function show(Organizer $organizer) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizer $organizer) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizer $organizer) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizer $organizer) {
        //
        $organizer->delete();

        return redirect()->route('organizers.index')
                        ->with('success', 'Organize deleted successfully');
    }

}
