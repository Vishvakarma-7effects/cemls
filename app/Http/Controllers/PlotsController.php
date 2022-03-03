<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use App\Models\Plotgallery;
use App\Models\CemeteryUser;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

use Gate;

class PlotsController extends Controller
{
		public function index(){
					abort_if(Gate::denies('plot_list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

	  $plots = Plot::orderBy('id', 'DESC')->paginate(10);
        $Indoorplots= plot::orderBy('id', 'DESC')->where('plottype1','Indoor')->paginate(10);
       $Outdoorplots= plot::orderBy('id', 'DESC')->where('plottype1','Outdoor')->paginate(10);
       $abovegroundplots= plot::orderBy('id', 'DESC')->where('plottype2','Above Ground')->paginate(10);
       $belowgroundplots= plot::orderBy('id', 'DESC')->where('plottype2','Below Ground')->paginate(10);
      
       $burialsplots = Plot::orderBy('id', 'DESC')->where('plottype3','Burial')->paginate(10);
       $cremationsplots= plot::orderBy('id', 'DESC')->where('plottype3','Cremation')->paginate(10);
	   $term = '';

	   if (request('term')) {

        $plots =  DB::table('plot')
                ->join('cemetery', 'cemetery.ID', '=', 'plot.cemetery_id')
                ->select('plot.*', 'cemetery.cemetery_name')
                ->where('cemetery.cemetery_name', 'like', '%' .request('term'). '%')
                ->orWhere('plot.id', 'like' , '%'. request('term') .'%') 
				->paginate(10);
				$term = request('term');
				}
								
            return View('admin.plots.index',compact('plots','burialsplots','cremationsplots','abovegroundplots','belowgroundplots','Indoorplots','Outdoorplots','term'));

	}
    public function create()
	{
					abort_if(Gate::denies('plot_add'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
									$plot->plottype1 = $request->plottype1;
									$plot->plottype2 = $request->plottype2;
									$plot->plottype3 = $request->plottype3;
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
							$plot->locationtitle1 = $request->locationtitle1;
							$plot->locationtitle2 = $request->locationtitle2;
							$plot->locationtitle3 = $request->locationtitle3;
							$plot->locationtitle4 = $request->locationtitle4;
							$plot->locationtitle5 = $request->locationtitle5;
							$plot->locationtitle6 = $request->locationtitle6;
							$plot->videourl = $request->videourl;
							$plot->save();

							  if($request->file('plotimage'))
        {


 foreach($request->file('plotimage') as $key => $file)
            {

            	 $imageName = time().rand(1,100000).'.'.$file->extension();
              $file->move(public_path('uploads/plotgallery'), $imageName);  
               //$file->store('plotgallery', 'uploads'), $name);  
        	 //$imageName = $file->file('plotimage')->store('plotgallery', 'uploads');
            DB::table('plotgallery')->insert([
                'plot_id' => $plot->id,
                'plotimage' => $imageName
               
            ]);
        }}

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
									$plot->plottype1 = $request->plottype1;
									$plot->plottype2 = $request->plottype2;
									$plot->plottype3 = $request->plottype3;
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
					$plot->locationtitle1 = $request->locationtitle1;
							$plot->locationtitle2 = $request->locationtitle2;
							$plot->locationtitle3 = $request->locationtitle3;
							$plot->locationtitle4 = $request->locationtitle4;
							$plot->locationtitle5 = $request->locationtitle5;
							$plot->locationtitle6 = $request->locationtitle6;
							$plot->videourl = $request->videourl;
					$plot->save();


					  if($request->file('plotimage'))
        {


 foreach($request->file('plotimage') as $key => $file)
            {

            	 $imageName = time().rand(1,100000).'.'.$file->extension();
              $file->move(public_path('uploads/plotgallery'), $imageName);  
               //$file->store('plotgallery', 'uploads'), $name);  
        	 //$imageName = $file->file('plotimage')->store('plotgallery', 'uploads');
            DB::table('plotgallery')->insert([
                'plot_id' => $plot->id,
                'plotimage' => $imageName
               
            ]);
        }

        }

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
					
					$plot->plot_public = $request->value;
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
  public function destroyplotimage(Request $request)
        {
        	//die('aa');
         
       $a =  DB::table('plotgallery')->where('id',$request->venue_id)->delete();

       $response['status'] = true;
        $response['msg'] = 'Upadted';

        return response()->json($response, 200);
 
        }


          public function getLocationtitle1(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle1')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle1,
        ];

        return response()->json($response, 200);
    }
     public function getLocationtitle2(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle2')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle2,
        ];

        return response()->json($response, 200);
    }
     public function getLocationtitle3(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle3')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle3,
        ];

        return response()->json($response, 200);
    }
     public function getLocationtitle4(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle4')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle4,
        ];

        return response()->json($response, 200);
    }
     public function getLocationtitle5(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle5')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle5,
        ];

        return response()->json($response, 200);
    }
     public function getLocationtitle6(Request $request) {


        $cemetery = DB::table('cemetery')
                        ->select('cemetery.ID', 'cemetery.locationtitle6')
                      
                        ->where('cemetery.ID', $request->venue_id)->first();


        $response = [
            'status' => true,
            'location' => $cemetery->locationtitle6,
        ];

        return response()->json($response, 200);
    }
}
