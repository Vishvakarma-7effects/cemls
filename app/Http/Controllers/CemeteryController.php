<?php

namespace App\Http\Controllers;

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

    public function index()
    {
        // $cemeterys = DB::select('select * from cemetery');
        $cemeterys = Cemetery::paginate(8);
        // return view('showCemetery',['cemeterys'=>$cemeterys]);
        return view('admin.cemetries.index', ['cemeterys' => $cemeterys]);
    }

    public function create()
    {
        $data['organizers'] = DB::table('organizers')
            ->select('id', 'name')
            ->when(!$this->isAdmin, function ($query) {
                return $query->where('user_id', $this->userId);
            })
            ->get();
        $data['venues'] = DB::table('venues')
            ->select('id', 'name')
            ->when(!$this->isAdmin, function ($query) {
                return $query->where('created_by', $this->userId);
            })
            ->get();
        $data['categories'] = DB::table('categories')
            ->select('id', 'name')
            ->get();

        return view('admin.cemetries.new', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::create($request->all());

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cemetery  $cemetery
     * @return \Illuminate\Http\Response
     */
    public function show(Cemetery $cemetery)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cemetery  $cemetery
     * @return \Illuminate\Http\Response
     */
    public function edit(Cemetery $cemetery)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cemetery  $cemetery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cemetery $cemetery)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post->update($request->all());

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function getAddMember()
    {
        return view('admin.cemetries.getAddMember');
    }
    public function getInvitePeople(Request $request)
    {
    return view('admin.cemetries.getInvitePeople');
    }
    public function dataSync(Request $request)
    {
        return view('admin.cemetries.dataSync');
    }
    public function getEdit(Request $request)
    {
    return view('admin.cemetries.edit');
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cemetery  $cemetery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cemetery $cemetery)
    {
        $cemetery->delete();

        return redirect()
            ->route('cemeterys.index')
            ->with('success', 'Cemetery deleted successfully');
    }
}
