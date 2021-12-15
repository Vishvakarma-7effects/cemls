<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Package;
use App\Models\Organizer;
use App\Models\User;
use App\Models\Attendee;
use App\Models\Page;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Stripe;
use Session;
use App\Models\Venue;

class HomeController extends Controller {

    public $event_model;
    public $menus;
    public $timeStamp;

    public function __construct() {
        $this->timeStamp = Carbon::now()->toDateTimeString();
        $this->event_model = new Event();
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function index() {
        $data = [];

        return view('index', $data);
    }

    public function about() {
        $data = [];

        return view('frontendAbout', $data);
    }

    public function services() {
        $data = [];

        return view('frontendServices', $data);
    }

    public function contact() {
        $data = [];

        return view('frontendContact', $data);
    }

    public function faq() {
        $data = [];

        return view('frontendFaq', $data);
    }

    public function page($urlSlug) {
        $id = DB::table('pages')->where('urlSlug', $urlSlug)->value('id');

        $data['page'] = Page::find($id);

        return view('frontendPage', $data);
    }

    public function event($urlSlug) {
//$test = $this->event_model->getEventById('id');

        $id = $this->getIdFromUrl($urlSlug);

        $data_fields = ['title', 'type'];
//$event = Event::find($id, $data_fields);
        $event = Event::find($id);

        $venue = DB::table('venues')
                ->select('id', 'name', 'website', 'fb', 'instagram', 'youtube')
                ->where('id', $event->venue_id)
                ->first();

        $organizer = DB::table('organizers')
                ->select('id', 'name', 'email', 'website', 'fb', 'instagram', 'youtube')
                ->where('id', $event->organizer_id)
                ->first();

        if (isset($_COOKIE["attendee_user_$id"])) {
            $data['overlay'] = 1;
        } else {
            $data['overlay'] = 0;
        }

//        $data = array(
//            'user' => $user
//        );
//        $cookie_name = "user";
//        setcookie($cookie_name, json_encode($data), time() + (18000), "/");


        $data['event'] = $event;
        $data['venue'] = $venue;
        $data['organizer'] = $organizer;

        return view('frontendEventDetails', $data);
    }

    public function packages() {
        $data['packages'] = Package::all('id', 'name', 'mPrice', 'aPrice', 'features', 'allowedEvent', 'description');
        foreach ($data['packages'] as $key => $value) {
            $data['packages'][$key]['features'] = explode(',', $value['features']);
        }
        return view('frontendPackageDetails', $data);
    }

    public function organizerReg(Request $request, $step) {

        switch ($step) {
            case 1:
                if (Auth::check()) {
                    return redirect('dashboard');
                } else {
                    return view('frontendOrganizerReg');
                }
                break;
            case 2:
                if (Auth::check()) {
                    $data['packages'] = Package::all('id', 'name', 'mPrice', 'aPrice', 'features', 'allowedEvent', 'description');
                    foreach ($data['packages'] as $key => $value) {
                        $data['packages'][$key]['mPriceId'] = Crypt::encryptString($value['id'] . '-mPriceId');
                        $data['packages'][$key]['aPriceId'] = Crypt::encryptString($value['id'] . '-aPriceId');
                        $data['packages'][$key]['features'] = explode(',', $value['features']);
                    }
                    return view('selectPlan', $data);
                } else {
                    return redirect('login')->with('error', 'Please Login First');
                }

                break;
            case 3:
                if (Auth::check()) {

                    if (session()->has('qty')) {
                        $qty = session()->get('qty');
                        $data['price'] = 3600 * $qty;
                        $data['qty'] = $qty;
                        return view('payment', $data);
                    } else {
                        return redirect('organizer-registration/2')->with('error', 'Please Select a Pacakge');
                    }
                } else {
                    return redirect('login')->with('error', 'Please Login First');
                }
                break;
            case 4:
                if (Auth::check()) {
                    if (session()->has('qty') && $request->stripeToken) {
                        $qty = session()->get('qty');
                        $amount = 3600 * $qty;

                        $order = new Order;
                        $order->user_id = Auth::user()->id;
                        $order->product_id = 1;
                        $order->amount = 3600;
                        $order->qty = $qty;
                        $order->date = date('Y-m-d');
                        $order->created_at = $this->timeStamp;
                        $order->updated_at = $this->timeStamp;
                        $order->save();

                        $pg_data = [];
                        try {
                            $result = Stripe\Charge::create([
                                        "amount" => $amount * 100,
                                        "currency" => "usd",
                                        "source" => $request->stripeToken,
                                        "description" => "Test payment"
                            ]);

                            if ($result->status == 'succeeded') {
                                $pg_data['order_id'] = $order->id;
                                $pg_data['payment_id'] = $result->id;
                                $pg_data['amount'] = $result->amount / 100;
                                $pg_data['balance_transaction'] = $result->balance_transaction;
                                $pg_data['transaction_time'] = $result->created;
                                $pg_data['description'] = $result->description;
                                $pg_data['payment_method'] = $result->payment_method;
                                $pg_data['receipt_url'] = $result->receipt_url;
                                $pg_data['currency'] = $result->currency;
                                $pg_data['payment_status'] = $result->status;
                                $pg_data['payment_method_details'] = json_encode($result->payment_method_details);

                                $update_order = Order::find($order->id);
                                $update_order->is_paid = '1';
                                $update_order->save();

                                $this->crateVenue(Auth::user()->id, $qty);
                            } else {
                                $pg_data['order_id'] = $order->id;
                                $pg_data['payment_id'] = $result->id;
                                $pg_data['amount'] = $result->amount / 100;
                                $pg_data['transaction_time'] = $result->created;
                                $pg_data['description'] = $result->description;
                                $pg_data['currency'] = $result->currency;
                                $pg_data['payment_status'] = $result->status;
                            }
                        } catch (Stripe\Exception\ApiErrorException $e) {
                            $result = (object) array();
                            $result->status = $e->getHttpStatus();
                            $result->type = $e->getError()->type;
                            $result->code = $e->getError()->code;
                            $result->param = $e->getError()->param;
                            $result->message = $e->getError()->message;

                            $pg_data['order_id'] = $order->id;
                            $pg_data['payment_id'] = $request->stripeToken;
                            $pg_data['amount'] = $amount;
                            $pg_data['transaction_time'] = time();
                            $pg_data['description'] = $result->message;
                            $pg_data['currency'] = 'usd';
                            $pg_data['payment_status'] = 'failed';
                        }
                        $pg_data['created_at'] = $this->timeStamp;
                        $pg_data['updated_at'] = $this->timeStamp;

                        $pg_last_id = DB::table('pg_details')->insertGetId($pg_data);

                        session()->put('payment_status', $pg_data['payment_status']);

                        return redirect('organizer-registration/5');
                    } else {
                        return redirect('organizer-registration/2')->with('error', 'Please Select a Pacakge');
                    }
                } else {
                    return redirect('login')->with('error', 'Please Login First');
                }
                break;
            case 5:
                if (Auth::check()) {
                    $payment_status = session()->get('payment_status');
                    if ($payment_status == 'succeeded') {
                        session()->forget('qty');
                        session()->forget('payment_status');
                        $data = [];
                        return view('paymentSucess', $data);
                    } else {
                        session()->forget('qty');
                        session()->forget('payment_status');
                        $data = [];
                        return view('paymentSucess', $data);
                    }
                } else {
                    return redirect('login')->with('error', 'Please Login First');
                }

                break;
        }
    }

    public function saveOrganizer(Request $request) {

        $rules = [
            'name' => 'required',
            'image' => 'mimes:jpg,jpeg,png,svg,gif|max:2048',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ];

        $request->validate($rules);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole(3);

        Auth::loginUsingId($user->id);

        $organizer = new Organizer;
        if ($request->file('image')) {
//For Encrypted file name
            $imageName = $request->file('image')->store('organizers', 'public');
            $organizer->image = $imageName;
        }

        $organizer->user_id = $user->id;
        $organizer->name = $request->name;
        $organizer->email = $request->email;
        $organizer->description = $request->description;
        $organizer->website = $request->website;
        $organizer->fb = $request->fb;
        $organizer->instagram = $request->instagram;
        $organizer->youtube = $request->youtube;
        $organizer->created_by = $user->id;
        $organizer->updated_by = $user->id;
        $organizer->save();

        return redirect('organizer-registration/2')->with('success', 'User Add Succesfully');
    }

    public function saveAttendee(Request $request) {

        $rules = [
            'name' => 'required',
            'event_id' => 'required'
        ];

        $request->validate($rules);
        $attendee = new Attendee;
        $event = Event::find($request->event_id);
        $additional = $request->all();

        if (!empty($additional['email'])) {
//=============SEND MAIL======
            $event_data['url'] = url('event/' . $event->urlSlug);
            $event_data['date'] = $event->startDate;
            $event_data['time'] = $event->startTime;
            $event_data['title'] = $event->title;

            $this->sendMail($additional['email'], $event_data);
        }


        $removeKeys = array('_token', 'event_id', 'submit');

        foreach ($removeKeys as $key) {
            unset($additional[$key]);
        }

        $attendee->event_id = $request->event_id;
        $attendee->created_by = $event->created_by;
        $attendee->attendee_info = json_encode($additional);
        $attendee->save();

        $data = array(
            'attendee_id' => $attendee->id
        );

        $cookie_name = "attendee_user_$request->event_id";
        setcookie($cookie_name, json_encode($data), time() + (604800), "/");

        $response = [
            'success' => true,
            'message' => 'Attende Saved'
        ];

        return response()->json($response, 200);
    }

    private function getIdFromUrl($urlSlug) {
        if (!is_numeric($urlSlug)) {
            $id = DB::table('events')->where('urlSlug', $urlSlug)->value('id');
        } else {
            $id = $urlSlug;
        }
        return $id;
    }

    public function setQty(Request $request) {
        $qty = $request->qty;
        session()->put('qty', $qty);
        $response = [
            'success' => true,
            'message' => 'Qty Updated',
            'url' => url('organizer-registration/3')
        ];

        return response()->json($response, 200);
    }

    public function setPackage(Request $request) {
        $package_id = $request->package_id;
        session()->put('package_id', $package_id);
        $response = [
            'success' => true,
            'message' => 'Package Selected',
//            'test' => Crypt::decryptString(session()->get('package_id')),
            'url' => url('organizer-registration/3')
        ];

        return response()->json($response, 200);
    }

    private function sendMail($email, $data) {
        $to = $email;
        $subject = "Thank You For Registering";
        $message = view('sendInviteMail', $data);

// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <no-reply@360xstream.com>' . "\r\n";
//        $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to, $subject, $message, $headers);
    }

    public function stripe() {
        return view('stripe');
    }

    public function stripePost(Request $request) {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $result = Stripe\Charge::create([
                        "amount" => 100 * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Test payment from itsolutionstuff.com."
            ]);
        } catch (Stripe\Exception\ApiErrorException $e) {

            $result = [
                "status" => $e->getHttpStatus(),
                "type" => $e->getError()->type,
                "code" => $e->getError()->code,
                "param" => $e->getError()->param,
                "message" => $e->getError()->message,
            ];
        }



        Session::flash('success', 'Payment successful!');

        return back();
    }

    private function crateVenue($user_id, $no_of_venue) {


        $organizer_id = Organizer::where('user_id', $user_id)->value('id');

        for ($x = 0; $x < $no_of_venue; $x++) {
            $venue = new Venue;

            $venue->image = 'default.jpg';
            $venue->name = '';
            $venue->organizer_id = $organizer_id;
            $venue->camera_id = '0';
            $venue->website = '';
            $venue->fb = '';
            $venue->instagram = '';
            $venue->youtube = '';
            $venue->created_by = $user_id;
            $venue->save();

            $update_venue = Venue::find($venue->id);
            $update_venue->name = 'VENUE-000' . $venue->id;
            $update_venue->save();
        }


        return true;
    }

}
