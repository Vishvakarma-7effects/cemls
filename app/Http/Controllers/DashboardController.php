<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Plot;
use App\Models\Cemetery;
use App\Models\User;
use App\Models\Role;
use App\Models\Mail;
use App\Models\Mailinbox;


class DashboardController extends Controller {

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



    //
    public function index() 
    {

        // echo "hy";exit;
        //event list view goes here
        //        $usr = Auth::user();
        //        $usr->removeRole(3);
        // dd(123);

        if (Auth::user()->hasRole(3)) 
        {
            $data['total_venue'] = 'N/A';
            $data['total_event'] = 'N/A';
            $data['attendee'] = 'N/A';
            $data['unpaid_billing'] = 'N/A';
            $data['current_usage'] = '2/5';
            $data['stream_minute'] = '120';
            $data['total_bill_month'] = '$540';
            $data['upcoming_event'] = '5';

            $data['events'] = Event::select('id', 'title', 'urlSlug', 'type', 'zip', 'location', 'startDate')
                    ->where('created_by', $this->userId)
                    ->get();
            return view('organizerDashboard', $data);
        } 
        else {
            $data['users'] = DB::table('users')->count();
            $data['total_revenue'] = '$' . (8234 + 2704);
            $data['total_paid'] = '$8234';
            $data['total_unpaid'] = '$2704';

            // dd($data);
            //Recent Messages 
            // $plot = Plot::leftjoin('cemetery','plot.id','=','cemetery.id')
            // ->select('plot.id','cemetery.cemetery_name','location_id','cemetery.address')->get();
            $cemeterys = Cemetery::orderBy('id','DESC')
            ->limit(10)
            ->get();

            $cemeteryscount = Cemetery::all();
// ............
            $mailcount = Mailinbox::orderBy('id','DESC')
            ->get();

            $mail = Mailinbox::orderBy('id','DESC')->limit(10)
            ->get();
// ..........

            $recentmsg = Mailinbox::orderBy('id','DESC')
            ->limit(10)
            ->get();
// .......
            $plotscount = Plot::orderBy('id','DESC')
            ->get();

            $plots = Plot::orderBy('id','DESC')
            ->limit(10)
            ->get();

            $recentPlotlists = Plot::orderBy('id','DESC')
            ->limit(5)
            ->get();



            //My Listings
            $recentPlot = Plot::leftjoin('cemetery','plot.cemetery_id','=','cemetery.id')
                ->leftjoin('views', 'plot.id','=','views.plot_id')
                ->select('plot.id','views.view')
                ->orderBy('id','DESC')
                ->limit(10)
                ->get();

            


            // $recentPlot = Plot::orderBy('id','DESC')->limit(10)->get();



            // dd($recentPlot);
            return view('admin.dashboard',compact('recentPlotlists','mail','recentPlot','recentmsg', 'cemeterys','cemeteryscount','mailcount', 'plots','plotscount'));

        }
       
    }

    public function widgets()
    {
        $cemeterys = Cemetery::orderBy('id','desc','feature')->paginate(10);
        return View('admin.widgets')
        ->with('cemeterys', $cemeterys);
    return view('admin.widgets');
    }

    public function contactUs()
    {
    return view('admin.contactUs');
    }

    public function aboutUs()
    {
    return view('admin.aboutUs');
    }

}
