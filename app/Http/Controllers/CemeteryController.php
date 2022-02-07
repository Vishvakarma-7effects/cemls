<?php namespace App\Http\Controllers;

use App\Models\Cemetery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
            // get all the sharks
            $cemeterys = Cemetery::paginate(10);

            
    
            // load the view and pass the sharks
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
                    $cemetery->cemetery_name = $request->cemetery_name;
                    $cemetery->cemetery_desc = $request->cemetery_desc;
                    $cemetery->address = $request->address;
                    $cemetery->city = $request->city;
                    $cemetery->state = $request->state;
                    $cemetery->country = $request->country;
                    $cemetery->zip = $request->zip;

                    $cemetery->save();
            
                    return redirect()->route('cemeterys.index')->with('success', 'Cemetery Add Succesfully');
            
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

        /**
          * Update the specified resource in storage.
          *
          * @param  \Illuminate\Http\Request  $request
          * @param  \App\Models\Cemetery  $cemetery
          * @return \Illuminate\Http\Response
          */
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
        public function update(Request $request)
        {
        //     $rules = array(
        //         'name'       => 'required',
        //         'email'      => 'required|email',
        //         'shark_level' => 'required|numeric'
        //     );
        //     $validator = Validator::make(Input::all(), $rules);
    
        //     if ($validator->fails()) {
        //         return Redirect::to('sharks/' . $id . '/edit')
        //             ->withErrors($validator)
        //             ->withInput(Input::except('password'));
        //     } else {
        //         $shark = shark::find($id);
        //         $shark->name       = Input::get('name');
        //         $shark->email      = Input::get('email');
        //         $shark->shark_level = Input::get('shark_level');
        //         $shark->save();
    
        //         Session::flash('message', 'Successfully updated shark!');
        //         return Redirect::to('sharks');
        //     }


        $request->validate([
                'cemetery_name' => 'required',
                'cemetery_desc' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'zip' => 'required',

            ]);
    
            $cemetery = Cemetery::findOrFail($request->id);
            $cemetery->cemetery_name = $request->cemetery_name;
            $cemetery->cemetery_desc = $request->cemetery_desc;
            $cemetery->address = $request->address;
            $cemetery->city = $request->city;
            $cemetery->state = $request->state;
            $cemetery->country = $request->country;
            $cemetery->zip = $request->zip;
             $cemetery->save();
    
    
            return redirect()->route('cemeterys.index')->with('success', 'Cemetery Updated Succesfully');



        }

        public function getAddMember()
        {
                return view('admin.cemetries.getAddMember');
        }
        public function getInvitePeople(Request $request)
        {
                return view('admin.cemetries.getInvitePeople');
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

                $cemeterys = Cemetery::findOrFail($id);
                return view('admin.cemetries.edit', compact('cemeterys'));
                return view('admin.cemetries.edit');
        }
        public function cemeteryListView(Request $request)
        {
                return view('admin.cemetries.cemeteryListView');
        }

        
        public function cemeteryListDetails(Request $request)
        {
        return view('admin.cemetries.cemeteryListDetails');
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
        
         $cemetery = Cemetery::findOrFail($id);

        $cemetery->delete();
        
        return redirect()->route('cemeterys.index')->with('success', 'Cemetery Deleted Succesfully');;

        }
}
