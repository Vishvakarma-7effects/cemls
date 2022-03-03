<?php
namespace App\Actions\Fortify;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cemetery;
use App\Models\Plot;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use DB;

class Apis extends Controller
{
    
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(Request $request)
    {        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
   
            return response()->json(['success' => $success], 200);
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401);
        } 
    }
 
   public function cemeterycreate(Request $request)
   {
       
      
 $validated = $request->validate([
        'cemetery_name' => 'required',
        'feature' => 'required',
            'public' => 'required',
    ]);

       $cemetery = new Cemetery;
               $cemetery->cemetery_name = $request->cemetery_name;

$cemetery->country = $request->country;
               $cemetery->state = $request->state;
               $cemetery->city = $request->city;
               $cemetery->address = $request->address;
               $cemetery->location = $request->location;
               $cemetery->zip = $request->zip;
               $cemetery->cemetery_desc = $request->cemetery_desc;
               $cemetery->locationtitle1 = $request->locationtitle1;
               $cemetery->locationtitle2 = $request->locationtitle2;
               $cemetery->locationtitle3 = $request->locationtitle3;
               $cemetery->locationtitle4 = $request->locationtitle4;
               $cemetery->locationtitle5 = $request->locationtitle5;
               $cemetery->locationtitle6 = $request->locationtitle6;
               $cemetery->feature = $request->feature;
               $cemetery->public = $request->public;

               $cemetery->save();


return response()->json($cemetery, 201);
   
   }

    public function plotcreate(Request $request)
   {
       
       $validated = $request->validate([
        'cemetery_id' => 'required',
        'feature' => 'required',
          
    ]);

       $plot = new Plot;
               $plot->cemetery_id = $request->cemetery_id;
               $plot->plotstatus = $request->plotstatus;
               $plot->plottype1 = $request->plottype1;
               $plot->plottype2 = $request->plottype2;
               $plot->plottype3 = $request->plottype3;
               $plot->plot_public = $request->plot_public;
               $plot->minprice = $request->minprice;
               $plot->maxprice = $request->maxprice;
                $plot->price = $request->price;
               $plot->internal_notes = $request->internal_notes;
               $plot->locationtitle1 = $request->locationtitle1;
               $plot->locationtitle2 = $request->locationtitle2;
               $plot->locationtitle3 = $request->locationtitle3;
               $plot->locationtitle4 = $request->locationtitle4;
               $plot->locationtitle5 = $request->locationtitle5;
               $plot->locationtitle6 = $request->locationtitle6;
               $plot->feature = $request->feature;
               $plot->save();


return response()->json($plot, 201);
   
   }
   
      public function getallcemeteries()
        {
          
         return Cemetery::all();
        }



        public function getallcemeteryshow($id)
    {
        return Cemetery::find($id);
    }
    
     public function getallplots($cemeteryid)
    {

        
$plots =  DB::table('plot')
        ->join('cemetery', 'cemetery.ID', '=', 'plot.cemetery_id')
        ->select('plot.*', 'cemetery.cemetery_name')
         ->where('plot.cemetery_id', $cemeteryid) ->get();



        return $plots;

    }
   public function getplotshow($cemeteryid,$plotid)
    {
       

        $plots =  DB::table('plot')
        ->join('cemetery', 'cemetery.ID', '=', 'plot.cemetery_id')
        ->select('plot.*', 'cemetery.cemetery_name')
         ->where('plot.cemetery_id', $cemeteryid) ->where('plot.id', $plotid) ->get();
        return $plots;
    }


    public function getallusercemeteries()
    {
        if(request()->ajax())
        {
            if(!empty($request->keyword))
            {
                $cemeterys =  DB::table('cemetery')
                            ->select('id','cemetery_name','address','latitude','longitude')
                            ->where('cemetery_name', $request->keyword)->get();
            }
            else
            {
                $cemeterys =  DB::table('cemetery')
                ->select('id','cemetery_name','address','latitude','longitude')->get();
            }
            
            return $cemeterys;
        }
        else{
            $cemeterys =  DB::table('cemetery')
            ->select('id','cemetery_name','address','latitude','longitude')->get();
            return $cemeterys;
        }
    }
}
