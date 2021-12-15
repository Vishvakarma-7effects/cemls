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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Product Name</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $key => $order)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>ORDER-0000{{$order->id}}</td>
                                                    <td>{{$order->name}}</td>
                                                    <td>{{$order->email}}</td>
                                                    <td>{{$order->product_name}}</td>
                                                    <td>{{$order->date}}</td>
                                                    <td>${{$order->amount * $order->qty}}</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" href="#">Details</a>
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
