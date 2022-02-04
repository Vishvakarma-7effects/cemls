<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
				/**
					* Display a listing of the resource.
					*
					* @return \Illuminate\Http\Response
					*/
				public function index()
				{
								// $data = DB::select('select * from plot ORDER BY `ID` DESC');
								// return view('admin.plots.index');
			
								$plots = Plot::paginate(10);
    
								// load the view and pass the sharks
								return View('admin.plots.index')
									->with('plots', $plots);
					}

				/**
					* Show the form for creating a new resource.
					*
					* @return \Illuminate\Http\Response
					*/
				public function create()
				{
								//
				return view('admin.plots.new');	
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
