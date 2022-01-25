<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });

        $permssion_slug = 'venue';
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
        $db = DB::table('venues');
        $db->select('venues.id', 'venues.name', 'venues.camera_id', 'cameras.name as camera', 'cameras.modelNo', 'organizers.name as organizer');
        $db->leftJoin('cameras', 'venues.camera_id', '=', 'cameras.id');
        $db->leftJoin('organizers', 'venues.organizer_id', '=', 'organizers.id');
        if (!$this->isAdmin) {
            $db->where('venues.created_by', $this->userId);
        }
        $data['venues'] = $db->get();

        return view('showVenue', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        if (Auth::user()->hasRole(3)) {
            return view('organizerCreateVenue');
        } else {
            $data['organizers'] = DB::table('organizers')
                    ->select('id', 'name')
                    ->get();
            $data['cameras'] = DB::table('cameras')
                    ->select('id', 'name', 'modelNo', 'liveUrl')
                    ->get();
            return view('createVenue', $data);
        }
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
            'organizer_id' => 'required',
            'camera_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png,svg,gif|max:2048'
        ];

        $request->validate($rules);
        $venue = new Venue;
        if ($request->file('image')) {
            //For Encrypted file name
            $imageName = $request->file('image')->store('venues', 'public');

            //For custom file name
            //$fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            //$imageName = $request->file('image')->storeAs('uploads', $fileName, 'public');

            $venue->image = $imageName;
        }
        // For making accesable url
        // asset('public/storage/' . $imageName);


        $venue->name = $request->name;
        $venue->organizer_id = $request->organizer_id;
        $venue->camera_id = $request->camera_id;
        $venue->website = $request->website;
        $venue->fb = $request->fb;
        $venue->instagram = $request->instagram;
        $venue->youtube = $request->youtube;
        $venue->created_by = $this->userId;
        $venue->save();

        return redirect()->route('venues.index')->with('success', 'Venue Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit(Venue $venue) {
        //

        if (!$this->isAdmin && $venue->created_by != $this->userId) {
            abort(403, "You Don't have access to edit other user resources");
            exit();
        }
        $cameras = DB::table('cameras')
                ->select('id', 'name', 'modelNo', 'liveUrl')
                ->get();
        $organizers = DB::table('organizers')
                ->select('id', 'name')
                ->get();

        return view('editVenue', compact('venue', 'cameras', 'organizers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venue $venue) {
        //
        $rules = [
            'name' => 'required',
            'organizer_id' => 'required',
            'camera_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png,svg,gif|max:2048'
        ];

        $request->validate($rules);
        if ($request->file('image')) {
            //For Encrypted file name
            $imageName = $request->file('image')->store('venues', 'public');

            $venue->image = $imageName;
        }


        $venue->name = $request->name;
        $venue->organizer_id = $request->organizer_id;
        $venue->camera_id = $request->camera_id;
        $venue->website = $request->website;
        $venue->fb = $request->fb;
        $venue->instagram = $request->instagram;
        $venue->youtube = $request->youtube;
        $venue->created_by = $this->userId;
        $venue->update();

        return redirect()->route('venues.index')->with('success', 'Venue Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venue $venue) {
        //
        $venue->delete();

        return redirect()->route('venues.index')
                        ->with('success', 'Page deleted successfully');
    }

}
