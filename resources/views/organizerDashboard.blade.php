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
                            <h4 class="title-section float-left">Summary</h4><a href="{{url('events')}}" class="float-right">Manage events</a>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$total_event}}</h4>
                                    <h5 class="mb-0">Events added</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$total_venue}}</h4>
                                    <h5 class="mb-0">Total Venue</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$attendee}}</h4>
                                    <h5 class="mb-0">Total Attendee</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$unpaid_billing}}</h4>
                                    <h5 class="mb-0">Unpaid Billing</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$current_usage}}</h4>
                                    <h5 class="mb-0">Current Usage</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$stream_minute}}</h4>
                                    <h5 class="mb-0">Streaming Minutes</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$total_bill_month}}</h4>
                                    <h5 class="mb-0">Total Bill</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$upcoming_event}}</h4>
                                    <h5 class="mb-0">Upcoming Event</h5>
                                </div>
                            </div>
                        </div>
                        <!---------Section Start--------->
                        <header class="section-heading mb-3 mt-5">
                            <h4 class="title-section float-left">Upcoming Event</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Start Date</th>
                                                    <th>Location</th>
                                                    <th>Zip</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($events as $key => $event)
                                                <tr>
                                                    <!--<td>{{$loop->iteration}}</td>-->
                                                    <td>{{$event->id}}</td>
                                                    <td>{{$event->title}}</td>
                                                    <td>{{$event->type}}</td>
                                                    <td>{{$event->startDate}}</td>
                                                    <td>{{$event->location}}</td>
                                                    <td>{{$event->zip}}</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" target="_blank" href="{{url('event/'.$event->urlSlug)}}">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------Section End--------->

                        <!---------Section Start--------->
                        <header class="section-heading mb-3 mt-5">
                            <h4 class="title-section float-left">Paid Invoices</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Invoice No.</th>
                                                    <th>Month</th>
                                                    <th>Date</th>
                                                    <th>Payment Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>INV-001</td>
                                                    <td>August</td>
                                                    <td>31 Jul,2021</td>
                                                    <td>03 Aug, 2021</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Download</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------Section End--------->


                        <!---------Section Start--------->
                        <header class="section-heading mb-3 mt-5">
                            <h4 class="title-section float-left">Unpaid Invoices</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Invoice No.</th>
                                                    <th>Month</th>
                                                    <th>Date</th>
                                                    <th>Due Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>INV-001</td>
                                                    <td>Sep</td>
                                                    <td>31 Aug,2021</td>
                                                    <td>05 Sep, 2021</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Download</a>
                                                        <a class="btn btn-sm btn-facebook" href="#">Pay Now</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------Section End--------->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
