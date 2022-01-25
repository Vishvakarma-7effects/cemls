<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {

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

        $permssion_slug = 'order';
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order) {
        //
    }

    public function recent_orders() {

        $orders = DB::table('orders')
                ->select('orders.id',
                        'orders.user_id',
                        'orders.product_id',
                        'orders.amount',
                        'orders.qty',
                        'orders.date',
                        'orders.is_paid',
                        'users.name',
                        'users.email',
                        'users.phone',
                        'products.name as product_name',
                )
                ->leftJoin('users', 'orders.user_id', '=', 'users.id')
                ->leftJoin('products', 'orders.product_id', '=', 'products.id')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('orders.user_id', $this->userId);
                })
                ->where('orders.is_paid', '1')
                ->get();

        $data['orders'] = $orders;

        return view('recent_orders', $data);
    }

    public function recent_unpaid_orders() {

        $orders = DB::table('orders')
                ->select('orders.id',
                        'orders.user_id',
                        'orders.product_id',
                        'orders.amount',
                        'orders.qty',
                        'orders.date',
                        'orders.is_paid',
                        'users.name',
                        'users.email',
                        'users.phone',
                        'products.name as product_name',
                )
                ->leftJoin('users', 'orders.user_id', '=', 'users.id')
                ->leftJoin('products', 'orders.product_id', '=', 'products.id')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('orders.user_id', $this->userId);
                })
                ->where('orders.is_paid', '0')
                ->get();

        $data['orders'] = $orders;

        return view('recent_unpaid_orders', $data);
    }

}
