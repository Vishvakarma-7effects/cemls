@extends('oldLayouts.main')

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
            @include('oldLayouts.sidebar')
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
                                    <h4>{{$event}}</h4>
                                    <h5 class="mb-0">Events added</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$venues}}</h4>
                                    <h5 class="mb-0">Total Venue</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$organizers}}</h4>
                                    <h5 class="mb-0">Organizers</h5>
                                </div>
                            </div>
                            <!--                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                                            <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                                                <h4>{{$users}}</h4>
                                                                <h5 class="mb-0">Total Users</h5>
                                                            </div>
                                                        </div>-->
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$camera}}</h4>
                                    <h5 class="mb-0">Total Camera</h5>
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
                                    <h4>{{$total_revenue}}</h4>
                                    <h5 class="mb-0">Total Revenue</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$total_paid}}</h4>
                                    <h5 class="mb-0">Total Paid</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>{{$total_unpaid}}</h4>
                                    <h5 class="mb-0">Total Unpaid</h5>
                                </div>
                            </div>
                        </div>
                        <!---------Section Start--------->
                        <header class="section-heading mb-3 mt-5">
                            <h4 class="title-section float-left">Recent Orders</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Mode</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ORDER-001</td>
                                                    <td>21 Sep,2021</td>
                                                    <td>$495</td>
                                                    <td>Credit Card</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Details</a>
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
                            <h4 class="title-section float-left">Recent Unpaid Orders</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Mode</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ORDER-002</td>
                                                    <td>21 Sep,2021</td>
                                                    <td>$495</td>
                                                    <td>Cheque</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Details</a>
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
                            <h4 class="title-section float-left">Paid Billings</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Event</th>
                                                    <th>Organizer</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ORDER-002</td>
                                                    <td>21 Sep,2021</td>
                                                    <td>$495</td>
                                                    <td>Manali Trip</td>
                                                    <td>Forest Lawn</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Details</a>
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
                            <h4 class="title-section float-left">Unpaid Billings</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Event</th>
                                                    <th>Organizer</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ORDER-002</td>
                                                    <td>30 Sep,2021</td>
                                                    <td>$495</td>
                                                    <td>Manali Trip</td>
                                                    <td>Forest Lawn</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Details</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
