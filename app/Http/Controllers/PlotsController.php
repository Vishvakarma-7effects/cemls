<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PlotsController extends Controller
{
    public function index()
	{
		$plots = Plot::paginate(10);
		return view('admin.plots.index')->with('plots', $plots);
	}
    public function create()
	{
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
					// dd($request->all());
							$plot = new Plot;
							$plot->garden = $request->garden;
							$plot->lot = $request->lot;
							$plot->grave = $request->grave;
							$plot->section = $request->section;
							$plot->row = $request->row;
							$plot->status = $request->status;
							$plot->tags = $request->tags;
							$plot->price = $request->price;
							$plot->cemetery_name = $request->cemetery_name;
							$plot->description = $request->description;
							$plot->public =$request->public;
							$plot->views = $request->views;
							$plot->internal_notes = $request->internal_notes;
							$plot->save();

							return redirect::to('plot')->with('success', 'Plots Add Succesfully');
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
					
					/*
				public function Edit($id)
				{
					$plots = Plot::findOrFail($id);
					$created_at = date('d-M-Y', strtotime($plots->created_at));
					
					return view('admin.plots.edit', compact('plots','created_at'));
					}
					*/


					public function edit(Plot $plot)
    {
             return view('admin.plots.edit',compact('plot'));

    }

					public function getEdit(Request $request)
					{
						//die('ll');
						$plots = Plot::findOrFail($request->id);
								
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
					$plot = Plot::findOrFail($request->id);
					$plot->garden = $request->garden;
					$plot->lot = $request->lot;
					$plot->grave = $request->grave;
					$plot->section = $request->section;
					$plot->row = $request->row;
					$plot->status = $request->status;
					$plot->tags = $request->tags;
					$plot->price = $request->price;
					$plot->cemetery_name = $request->cemetery_name;
					$plot->description = $request->description;
					$plot->public = $request->public;
					$plot->views = $request->views;
					$plot->internal_notes = $request->internal_notes;
					$plot->save();

					return redirect::to('plots.index')->with('success', 'Plots Update Succesfully');
 


				}

				/**
					* Remove the specified resource from storage.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
					public function destroy($id) 
					{
						// dd(3333);
						$plot = Plot::findOrFail($id);
				
						$plot->delete();
						
						return redirect()->route('plots.index')->with('success', 'Plot Deleted Succesfully');;
					}


}
