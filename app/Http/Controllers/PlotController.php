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
								// $roles=Role::all();
								// return view('plot', ['data' => $data]);
								
								// $data = DB::select('select * from plot ORDER BY `ID` DESC');
								// return view('admin.plots.index');
								$plots = Plot::paginate(2);
								
								return View('admin.plots.index')->with('plots', $plots);
					
				}

				/**
					* Show the form for creating a new resource.
					*
					* @return \Illuminate\Http\Response
					*/
				public function create()
				{
					return view('admin.plots.customeNew');
				}
 
						// public function customeNew()
						// {
						// //
						// return view('admin.plots.customeNew');
						// }


				public function store(Request $req)
				{
					// dd($req->all());
					
					$plot = new Plot;
					$plot->location_id = $req->location_id;
					$plot->garden = $req->garden; 
					$plot->lot = $req->lot;
					$plot->grave = $req->grave;
					$plot->plot_number = $req->plot_number;
					$plot->section = $req->section;
					$plot->row = $req->row;
					$plot->status = $req->status;
					$plot->tags = $req->tags;
					$plot->price = $req->price;
					$plot->cemetery_name = $req->cemetery_name;
					$plot->description = $req->description;
					$plot->public = $req->public;
					$plot->internal_notes = $req->internal_notes;
					$plot->save();

					return redirect()->route('plots.index')->with('success', 'Plot Add Succesfully');

				}

				/**
					* Display the specified resource.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function show($id)
				{
								//
				}

				/**
					* Show the form for editing the specified resource.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function Edit($id)
				{
					$plots = Plot::findOrFail($id);
					$created_at = date('d-M-Y', strtotime($plots->created_at));
					
	
					return view('admin.plots.edit', compact('plots','created_at'));
				}
				// public function getEdit(Request $request)
				// {
		
				// 		$plots = Plot::findOrFail($id);
				// 		return view('admin.plots.edit', compact('plots'));
				// 		return view('admin.plots.edit');
				// }
 

				/**
					* Update the specified resource in storage.
					*
					* @param  \Illuminate\Http\Request  $request
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				
				public function saveplots(Request $req)
				{	


					$plot =  Plot::findOrFail($req->id);
					
					$plot->location_id = $req->location_id;
					$plot->garden = $req->garden; 
					$plot->lot = $req->lot;
					$plot->grave = $req->grave;
					$plot->plot_number = $req->plot_number;
					$plot->section = $req->section;
					$plot->row = $req->row;
					$plot->status = $req->status;
					$plot->tags = $req->tags;
					$plot->price = $req->price;
					$plot->cemetery_name = $req->cemetery_name;
					$plot->description = $req->description;
					$plot->public = $req->public;
					$plot->internal_notes = $req->internal_notes;
					$plot->save();

					// dd($plot);

					return redirect()->route('plots.index')->with('success', 'Plot Add Succesfully');
			

				}
		

				/**
					* Remove the specified resource from storage.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
				public function destroy(Plot $plot)
				{ 
					// dd($plot);
					$plot = Plot::findOrFail($plot->id);

					$plot->delete();					
					return redirect()->route('plots.index')->with('success', 'Plot Deleted Succesfully');;
			
				}
}
