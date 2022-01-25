@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Dashboard</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="card box">
                    <div class="card-body">
                        <header class="section-heading mb-3">
                            <h4 class="title-section float-left">Orders</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Event</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                    <th>Ticket</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#10001</td>
                                                    <td>2021-07-29</td>
                                                    <td>Manali Trip</td>
                                                    <td>$1000</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-dark" href="#">Raise Ticket</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10002</td>
                                                    <td>2021-08-02</td>
                                                    <td>USA EVENT</td>
                                                    <td>$1000</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-sm btn-dark" href="#">Raise Ticket</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
