<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class PlotsController extends Controller
{
    public function index()
	{
		
  $plots = Plot::orderBy('id','desc','feature')->paginate(5);

            
    
            // load the view and pass the sharks
            return View('admin.plots.index')
                ->with('plots', $plots);

	}
    public function create()
	{

          $data['cemeteries'] = DB::table('cemetery')->select('ID', 'cemetery_name')->get();
      return view('admin.plots.new', $data);
		
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
							$plot->cemetery_id = $request->cemetery_id;
								$plot->plotstatus = $request->plotstatus;
									$plot->plottype = $request->plottype;
										$plot->minprice = $request->minprice;
											$plot->maxprice = $request->maxprice;
							$plot->plot_public = $request->plot_public;
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

							return redirect::to('plots')->with('success', 'Plots Add Succesfully');
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
  $cemetery = DB::table('cemetery')->select('ID', 'cemetery_name')->get();

             return view('admin.plots.edit',compact('plot','cemetery'));

    	       

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
					//$plot = Plot::findOrFail($request->id);
					$plot->cemetery_id = $request->cemetery_id;
								$plot->plotstatus = $request->plotstatus;
									$plot->plottype = $request->plottype;
										$plot->minprice = $request->minprice;
											$plot->maxprice = $request->maxprice;
							$plot->plot_public = $request->plot_public;
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

					return redirect::to('plots')->with('success', 'Plots Update Succesfully');
 


				}

				/**
					* Remove the specified resource from storage.
					*
					* @param  \App\Models\Plot  $plot
					* @return \Illuminate\Http\Response
					*/
					public function updateFeature(Request $request, Plot $plot) {


$plot = Plot::findOrFail($request->event_id);
					
					$plot->feature = $request->value;
					$plot->save();



         
        

        $response['status'] = true;
        $response['msg'] = 'Upadted';

        return response()->json($response, 200);
    }

      public function destroy(Plot $plot)
        {
            
          $a = plot::where(['id'=>$plot->id])->delete();
      
        
        return redirect()->to('plots')->with('success', 'Plot Deleted Succesfully');;

        }
}
