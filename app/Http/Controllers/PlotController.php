<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Plot;
use Illuminate\Http\Request;
// use App\Http\Controllers\Role;

class PlotController extends Controller
{
				/**
					* Display a listing of the resource.
					*
					* @return \Illuminate\Http\Response
					*/
				public function index()
				{
								//$data = Plot::latest()->paginate(20);

								// return view('plot',compact('data'))
								//  ->with('i', (request()->input('page', 1) - 1) * 20);
								$data = DB::select('select * from plot ORDER BY `ID` DESC');
								// $roles=Role::all();
								// return view('plot', ['data' => $data]);
								return view('admin.plots.index');
				}

				/**
					* Show the form for creating a new resource.
					*
					* @return \Illuminate\Http\Response
					*/
				public function create()
				{
								//
										// $roles=DB::select('roles')->get();
      //  $roles = DB::table('roles')->get();

							//return view('admin.plots.new',compact('roles'));	
							return view('admin.plots.customeNew');
						}

						public function customeNew()
						{
						//
						return view('admin.plots.customeNew');
						}

				/**
					* Store a newly created resource in storage.
					*
					* @param  \Illuminate\Http\Request  $request
					* @return \Illuminate\Http\Response
					*/
				public function store(Request $request)
				{
								//
				}

				/**
					* Display the specified resource.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function show(Plot $plot)
				{
								//
				}

				/**
					* Show the form for editing the specified resource.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function getEdit(Request $request)
				{
								return view('admin.plots.edit');
				}

				/**
					* Update the specified resource in storage.
					*
					* @param  \Illuminate\Http\Request  $request
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function update(Request $request, Plot $plot)
				{
								//
				}

				/**
					* Remove the specified resource from storage.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function destroy(Plot $plot)
				{
								//
				}
}
