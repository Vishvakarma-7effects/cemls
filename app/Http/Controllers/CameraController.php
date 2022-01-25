<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CameraController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $data['cameras'] = Camera::select('id', 'name', 'modelNo', 'liveUrl', 'lat', 'long')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();

        //echo $events;
        return view('showCamera', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $data = [];
        return view('createCamera', $data);
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
            'modelNo' => 'required',
            'liveUrl' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ];
        $request->validate($rules);

        $camera = new Camera;
        $camera->name = $request->name;
        $camera->modelNo = $request->modelNo;
        $camera->camera_wowza_id = $request->camera_wowza_id;
        $camera->liveUrl = $request->liveUrl;
        $camera->lat = $request->lat;
        $camera->long = $request->long;
        $camera->created_by = $this->userId;
        $camera->save();

        //return redirect('events');

        return redirect()->route('camera.index')->with('success', 'Camera Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function show(Camera $camera) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function edit(Camera $camera) {
        //
        return view('editCamera', compact('camera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camera $camera) {
        //

        $rules = [
            'name' => 'required',
            'modelNo' => 'required',
            'liveUrl' => 'required',
            'lat' => 'required',
            'long' => 'required'
        ];
        $request->validate($rules);

        $camera->name = $request->name;
        $camera->modelNo = $request->modelNo;
        $camera->camera_wowza_id = $request->camera_wowza_id;
        $camera->liveUrl = $request->liveUrl;
        $camera->lat = $request->lat;
        $camera->long = $request->long;
        $camera->update();

        return redirect()->route('camera.index')->with('success', 'Camera Add Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camera $camera) {
        $camera->delete();

        return redirect()->route('camera.index')
                        ->with('success', 'Camera deleted successfully');
        //
    }

}
