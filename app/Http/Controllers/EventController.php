<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller {

    public $timeStamp;
    public $isAdmin;
    public $userId;

    function __construct() {
        $this->timeStamp = Carbon::now()->toDateTimeString();

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });

        $permssion_slug = 'event';
        $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //event list view goes here

        $events = Event::select('id', 'title', 'urlSlug', 'type', 'zip', 'location', 'startDate')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();

        return view('showEvent', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

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

        return view('createEvent', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $rules = [
            'title' => 'required',
            'type' => 'required'
        ];
        $request->validate($rules);

        $event = new Event;
        $event->organizer_id = $request->organizer_id;
        $event->venue_id = $request->venue_id;
        $event->title = $request->title;
        $event->urlSlug = $this->slug_creator($request->title);
        $event->type = $request->type;
        $event->category = $request->category;
        $event->zip = $request->zip;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->videoUrl = $request->videoUrl == '' ? '' : $request->videoUrl;
        $event->startDate = $request->startDate;
        $event->startTime = $request->startTime;
        $event->endDate = $request->endDate;
        $event->endtTime = $request->endtTime;
        $event->timeZone = $request->timeZone;
        $event->collectionType = $request->collectionType;
        $event->infoToCollect = json_encode($request->infoToCollect);
        $event->eventReccurance = $request->eventReccurance;
        $event->created_by = $this->userId;
        //$event->updated_at = $this->timeStamp;
        $event->save();

        //return redirect('events');

        return redirect()->route('events.index')->with('success', 'Event Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event) {

        if (!$this->isAdmin && $event->created_by != $this->userId) {
            abort(403, "You Don't have access to edit other user resources");
            exit();
        }

        $organizers = DB::table('organizers')
                ->select('id', 'name')
                ->get();
        $venues = DB::table('venues')
                ->select('id', 'name')
                ->get();
        $categories = DB::table('categories')
                ->select('id', 'name')
                ->get();

        return view('editEvent', compact('event', 'organizers', 'venues', 'categories'));
    }

    public function editByParam($id) {

        return Event::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event) {
        $rules = [
            'title' => 'required',
            'type' => 'required'
        ];
        $request->validate($rules);

        $event->title = $request->title;
        $event->type = $request->type;
        $event->category = $request->category;
        $event->zip = $request->zip;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->videoUrl = $request->videoUrl == '' ? '' : $request->videoUrl;
        $event->startDate = $request->startDate;
        $event->startTime = $request->startTime;
        $event->endDate = $request->endDate;
        $event->endtTime = $request->endtTime;
        $event->timeZone = $request->timeZone;
        $event->collectionType = $request->collectionType;
        $event->infoToCollect = json_encode($request->infoToCollect);
        $event->eventReccurance = $request->eventReccurance;
        //$event->updated_at = $this->timeStamp;
        $event->update();

        return redirect()->route('events.index')->with('success', 'Event Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event) {
        $event->delete();

        return redirect()->route('events.index')
                        ->with('success', 'Event deleted successfully');
    }

    private function slug_creator($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        $urlSlugCount = DB::table('events')
                ->where('urlSlug', 'like', "%$text%")
                ->count();

        if ($urlSlugCount) {
            $text = $text . '-' . ($urlSlugCount + 1);
        }

//        $return->sameUrlNo = $urlSlugCount;
//        $return->urlSlug = $text;

        return $text;
    }

}
