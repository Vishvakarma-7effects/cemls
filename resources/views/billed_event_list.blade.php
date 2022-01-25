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
                            <div class="col-md-4 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>200 Min</h4>
                                    <h5 class="mb-0">Current Month Streaming</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>$500</h4>
                                    <h5 class="mb-0">Previous Month Bill</h5>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 p-1">
                                <div class="bg-primary rounded p-4 text-center text-white position-relative counter-box">
                                    <h4>$340</h4>
                                    <h5 class="mb-0">Unbilled Amount</h5>
                                </div>
                            </div>
                        </div>
                        <!---------Section Start--------->
                        <header class="section-heading mb-3 mt-5">
                            <h4 class="title-section float-left">Billed Event</h4>
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
                                                    <th>Event Name</th>
                                                    <th>Date</th>
                                                    <th>Duration</th>
                                                    <th>Charge For Event</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Newyork Trip</td>
                                                    <td>31 Jul,2021</td>
                                                    <td>60 min</td>
                                                    <td>$99</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Birthday Celebration</td>
                                                    <td>31 Jul,2021</td>
                                                    <td>90 min</td>
                                                    <td>$149</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">View</a>
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
