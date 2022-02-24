<?php namespace App\Http\Controllers;

use App\Models\Cemetery;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMailRequest;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Mail;
use App\Models\User;

class CemeteryController extends Controller
{
        public $timeStamp;
        public $isAdmin;
        public $userId;
        /*
        function __construct() {
            $this->timeStamp = Carbon::now()->toDateTimeString();

            $this->middleware('auth');
            $this->middleware(function ($request, $next) {
                                            $this->isAdmin = Auth::user()->hasRole(1);
                                            $this->userId = Auth::user()->id;

                                            return $next($request);
            });
            $permssion_slug = 'cemetery';
            $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
            $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
            $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
            $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
        }
        */

        // public function index()
        // {
        //         $cemeterys = Cemetery::paginate(8);
        //         return view('admin.cemetries.index', ['cemeterys' => $cemeterys]);
        // }

        public function index()
        {
          
         
    $cemeterys = Cemetery::orderBy('id', 'DESC')->paginate(10);
        if (request('term')) {

     $cemeterys = DB::table('cemetery')
            ->where('cemetery_name','like',"%".request('term')."%")->get();

        }
   return View('admin.cemetries.index')
               ->with('cemeterys', $cemeterys);
        }



        public function create()

        {
            // load the create form (app/views/sharks/create.blade.php)
            return View('admin.cemetries.new');
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

            
                    $cemetery = new Cemetery;

                    if ($request->file('image')) {
            $imageName = $request->file('image')->store('cemetery', 'uploads');
           $cemetery->image = $imageName; 
        }
                    $cemetery->cemetery_name = $request->cemetery_name;
                    $cemetery->cemetery_desc = $request->cemetery_desc;
                    $cemetery->address = $request->address;
                      $cemetery->location = $request->location;
                    $cemetery->city = $request->city;
                    $cemetery->state = $request->state;
                    $cemetery->country = $request->country;
                    $cemetery->zip = $request->zip;
                     $cemetery->locationtitle1 = $request->locationtitle1;
                      $cemetery->locationtitle2 = $request->locationtitle2;
                       $cemetery->locationtitle3 = $request->locationtitle3;
                        $cemetery->locationtitle4 = $request->locationtitle4;
                         $cemetery->locationtitle5 = $request->locationtitle5;
                          $cemetery->locationtitle6 = $request->locationtitle6;
                           $cemetery->cemetery_latitude = $request->cemetery_latitude;
                            $cemetery->cemetery_longitude = $request->cemetery_longitude;
                     $cemetery->created_by = auth()->user()->id;

                    $cemetery->save();
                    // return Redirect::to('cemeteries');

            
                    return redirect()->to('cemeteries')->with('success', 'Cemetery Add Succesfully');
            
        }


        /**
          * Display the specified resource.
          *
          * @param  \App\Models\Cemetery  $cemetery
          * @return \Illuminate\Http\Response
          */
        // public function show(Cemetery $cemetery)
        // {
        //         return view('posts.show', compact('post'));
        // }

        public function show($id)
        {
            // get the shark
        //     $cemetery = Cemetery::find($id);
    
        //     return View::make('cemeterys.show')
        //         ->with('cemetery', $cemetery);
        }

        /**
          * Show the form for editing the specified resource.
          *
          * @param  \App\Models\Cemetery  $cemetery
          * @return \Illuminate\Http\Response
          */
        // public function edit(Cemetery $cemetery)
        // {
        //         return view('posts.edit', compact('post'));
        // }
        public function edit($id)
        {
                $cemeterys = Cemetery::findOrFail($id);
                $created_at = date('d-M-Y', strtotime($cemeterys->created_at));
                
                return view('admin.cemetries.edit', compact('cemeterys','created_at'));
        }

        
        // public function update(Request $request, Cemetery $cemetery)
        // {
        //         $request->validate([
        //                 'title' => 'required',
        //                 'description' => 'required',
        //         ]);

        //         $post->update($request->all());

        //         return redirect()
        //                 ->route('posts.index')
        //                 ->with('success', 'Post updated successfully');
        // }
         public function update(Request $request, $id)
        {

      
           
if ($request->file('image')) {
            $imageName = $request->file('image')->store('cemetery', 'uploads');
             $cemetery = Cemetery::where('ID',$id)->update([
                        'cemetery_name'=>$request->cemetery_name,
                        'cemetery_desc'=>$request->cemetery_desc,
                        'address'=>$request->address,
                        'location'=>$request->location,
                        'city'=>$request->city,
                        'state'=>$request->state,
                        'country'=>$request->country,
                        'zip'=>$request->zip,
                         'locationtitle1'=>$request->locationtitle1,
                        'locationtitle2'=>$request->locationtitle2,
                        'locationtitle3'=>$request->locationtitle3,
                         'locationtitle4'=>$request->locationtitle4,
                        'locationtitle5'=>$request->locationtitle5,
                        'locationtitle6'=>$request->locationtitle6,
                         'cemetery_latitude'=>$request->cemetery_latitude,
                         'cemetery_longitude'=>$request->cemetery_longitude,
                       'image'=>$imageName,

                ]);
           
        }
        

                $cemetery = Cemetery::where('ID',$id)->update([
                        'cemetery_name'=>$request->cemetery_name,
                        'cemetery_desc'=>$request->cemetery_desc,
                        'address'=>$request->address,
                        'location'=>$request->location,
                        'city'=>$request->city,
                        'state'=>$request->state,
                        'country'=>$request->country,
                        'zip'=>$request->zip,
                         'locationtitle1'=>$request->locationtitle1,
                        'locationtitle2'=>$request->locationtitle2,
                        'locationtitle3'=>$request->locationtitle3,
                         'locationtitle4'=>$request->locationtitle4,
                        'locationtitle5'=>$request->locationtitle5,
                        'locationtitle6'=>$request->locationtitle6,
                         'cemetery_latitude'=>$request->cemetery_latitude,
                         'cemetery_longitude'=>$request->cemetery_longitude,


                ]);

                return redirect()->to('cemeteries')->with('success', 'Cemetery Updated Succesfully');

        }

        

 public function updateFeature(Request $request) {

          $cemetery = Cemetery::where('ID',$request->event_id)->update([
                        'feature'=>$request->value,
                       
                ]);
        

        $response['status'] = true;
        $response['msg'] = 'Upadted';

        return response()->json($response, 200);
    }
    public function updatePublic(Request $request) {

          $cemetery = Cemetery::where('ID',$request->event_id)->update([
                        'public'=>$request->value,
                       
                ]);
        

        $response['status'] = true;
        $response['msg'] = 'Upadted';

        return response()->json($response, 200);
    }
        public function getAddMember()
        {
                return view('admin.cemetries.getAddMember');
        }
        public function getInvitePeople(Request $request )
        {
                $cemeteries = Cemetery::all();
                                                    
          

                return view('admin.cemetries.getInvitePeople',compact('cemeteries'));
        }
        
        public function storeInvitePeople(Request $request)
        {

                $request->merge(['created_by'=>auth()->user()->id,'status'=>'SEND']);
                // $request->input('type')='invitation';
                // dd($request->all());
                $invite = Mail::create($request->all());
                if($invite){
                        if($request->input('type')=='INVITATION'){
                                $checkUser=User::where(['email'=>$request->input('email')])->get();

                                // dd($checkUser);
                                if(count($checkUser)<1){
                                        
                                        $a=User::create([
                                                'email'=>$request->input('email'),'type'=>'INVITATED','status'=>'INVITATED'
                                        ]);
                                        // dd($a);
                                }
                        }
                        session()->flash('message', 'Mail Successfully Sent');
                }
                return redirect()->route('cemeterys.getInvitePeople');

        }
        public function manageMember()
        {
                return view('admin.cemetries.manageMember');
        }

        public function dataSync(Request $request)
        {
                return view('admin.cemetries.dataSync');
        }
        public function getEdit(Request $request)
        {
        //       dd($request);
                $cemeterys = Cemetery::findOrFail($request->id);
                return view('admin.cemetries.edit', compact('cemeterys'));
                // return view('admin.cemetries.edit');
        }
        public function cemeteryListView(Request $request)
        {
                return view('admin.cemetries.cemeteryListView');
        }

        
        public function cemeteryListDetails(Request $request)
        {
        return view('admin.cemetries.cemeteryListDetails');
        }
        
        public function cemeteryDetailPage(Request $request)
        {
        return view('admin.cemetries.cemeteryDetailPage');
        }
        /**
          * Remove the specified resource from storage.
          *
          * @param  \App\Models\Cemetery  $cemetery
          * @return \Illuminate\Http\Response
          */
        public function destroy(Cemetery $cemetery)
        {
            // $cemetery->delete();

                // return redirect()
                //         ->route('cemeterys.index')
                //         ->with('success', 'Cemetery deleted successfully');
        // dd($cemetery->ID);
          $a = Cemetery::where(['ID'=>$cemetery->ID])->delete();
        //   dd(Cemetery::where(['ID'=>$cemetery->ID])->get());
        //   dd(Cemetery::where(['id'=>$cemetery->id])->get());

        // $cemetery->delete();
        
        return redirect()->to('cemeteries')->with('success', 'Cemetery Deleted Succesfully');;

        }
         public function cemeteryDetailPagenew(Request $request)
        {
                die('aa');
        return view('admin.cemetries.cemeteryDetailPagenew');
        }
         public function cemeteryDetail(Request $request)
        {
        return view('admin.cemetries.cemeterypopup');
        }
}
