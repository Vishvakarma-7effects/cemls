<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AttendeeController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $data['attendies'] = $this->getAttendeeData();
        //dd($data);
        return view('showAttendee', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($event_id = 0) {
        //

        $data['events'] = Event::select('id', 'title')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();
        $data['event_id'] = $event_id;
        return view('createAttendee', $data);
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
            'name' => 'required',
            'event_id' => 'required'
        ];

        $request->validate($rules);

        $count = count($request->name);
        $additional = $request->all();
        $removeKeys = array('_token', 'event_id', 'submit');

        foreach ($removeKeys as $key) {
            unset($additional[$key]);
        }

        //dd($additional);

        for ($x = 0; $x < $count; $x++) {
            $attendee = new Attendee;
            $attendee->event_id = $request->event_id;

            foreach ($additional as $key => $value) {
                $single_attendee[$key] = $value[$x];
            }


            if (!empty($single_attendee['email'])) {
                //=============SEND MAIL======
                $event = Event::find($request->event_id);

                $event_data['url'] = url('event/' . $event->urlSlug);
                $event_data['date'] = $event->startDate;
                $event_data['time'] = $event->startTime;
                $event_data['title'] = $event->title;

                $this->sendMail($single_attendee['email'], $event_data);
            }
            if (!empty($single_attendee['phone'])) {
                //=============
            }

            $attendee->attendee_info = json_encode($single_attendee);
            $attendee->created_by = $this->userId;

            $attendee->save();
        }

        return redirect()->route('attendee.index')->with('success', 'Invitation sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendee $attendee) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee) {
        //
        $attendee->delete();

        return redirect()->route('attendee.index')
                        ->with('success', 'Attendee Deleted Succesfully');
    }

    private function getAttendeeData() {
        $db = DB::table('attendees');

        $db->select('attendees.id', 'attendees.event_id', 'attendees.attendee_info', 'events.title as event');
        $db->leftJoin('events', 'attendees.event_id', '=', 'events.id');
        $db->orderBy('attendees.event_id', 'asc');
        if (!$this->isAdmin) {
            $db->where('attendees.created_by', $this->userId);
        }
        $attendies = $db->get();

        //$attendies = json_decode(json_encode($attendies), true);

        foreach ($attendies as $key => $value) {
            $key_prev = $key - 1;
            $attendUser = json_decode($value->attendee_info);
            $attendUserInfo = '';
            $ik = 0;
            foreach ($attendUser as $k2 => $val) {
                if (!$ik) {
                    $ik++;
                    $attendUserInfo .= ucfirst($k2) . ' : ' . $val;
                } else {
                    $attendUserInfo .= ', ' . ucfirst($k2) . ' : ' . $val;
                }
            }
            $attendies[$key]->attendee_info = $attendUserInfo;
            if ($key != 0 && $attendies[$key]->event_id == $attendies[$key_prev]->event_id) {
                $rowspanValue += 1;

                if ($tempIndexValue === -1) {
                    $tempIndexValue = $key - 1;
                }

                $attendies[$tempIndexValue]->rowspanValue = $rowspanValue;
                $attendies[$key]->rowspanValue = 1;
                $attendies[$key]->rowspanStatus = 1;
            } else {
                $rowspanValue = 1;
                $tempIndexValue = -1;
                $attendies[$key]->rowspanStatus = 0;
                $attendies[$key]->rowspanValue = $rowspanValue;
            }
        }
        return $attendies;
    }

    private function sendMail($email, $data) {
        $to = $email;
        $subject = "360XStream Event";
        $message = view('sendInviteMail', $data);

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <no-reply@360xstream.com>' . "\r\n";
//        $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to, $subject, $message, $headers);
    }

}
