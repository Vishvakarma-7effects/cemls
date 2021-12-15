<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });

        $permssion_slug = 'package';
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
        $data['packages'] = Package::select('id', 'name', 'mPrice', 'aPrice', 'features', 'allowedEvent')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();
        return view('showPackages', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('createPackage');
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
            'mPrice' => 'required',
            'aPrice' => 'required',
            'features' => 'required',
            'allowedEvent' => 'required',
        ];

        $request->validate($rules);

        $package = new Package;

        $package->name = $request->name;
        $package->mPrice = $request->mPrice;
        $package->aPrice = $request->aPrice;
        $package->features = $request->features;
        $package->allowedEvent = $request->allowedEvent;
        $package->created_by = $this->userId;
//        $package->description = $request->description;
        $package->save();

        return redirect()->route('packages.index')->with('success', 'Package Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package) {
        //
        return view('editPackage', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package) {
        //
        $rules = [
            'name' => 'required',
            'mPrice' => 'required',
            'aPrice' => 'required',
            'features' => 'required',
            'allowedEvent' => 'required',
        ];

        $request->validate($rules);

        $package->name = $request->name;
        $package->mPrice = $request->mPrice;
        $package->aPrice = $request->aPrice;
        $package->features = $request->features;
        $package->allowedEvent = $request->allowedEvent;
//        $package->description = $request->description;
        $package->update();

        return redirect()->route('packages.index')->with('success', 'Package Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package) {
        //
        $package->delete();

        return redirect()->route('packages.index')
                        ->with('success', 'Packages deleted successfully');
    }

}
