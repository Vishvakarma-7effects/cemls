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
                            <p>The following addresses will be used on the checkout page by default</p>
                            <h4 class="title-section float-left">Billing Address</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-4">
                                <div class="card address-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="w50">
                                                <a href="#">Edit</a>
                                            </div>
                                            <div class="w50 text-right">
                                                <a href="#">Default</a>
                                            </div>
                                        </div>
                                        <h5>Rohit Batra</h5>
                                        <p>Janta Flats Hastsai, Uttam Nagar</p>
                                        <p>Delhi 110059</p>
                                        <p>India</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card address-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="w50">
                                                <a href="#">Edit</a>
                                            </div>
                                        </div>
                                        <h5>Rohit Batra</h5>
                                        <p>Janta Flats Hastsai, Uttam Nagar</p>
                                        <p>Delhi 110059</p>
                                        <p>India</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card address-card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="w50">
                                                <a href="#">Edit</a>
                                            </div>
                                        </div>
                                        <h5>Rohit Batra</h5>
                                        <p>Janta Flats Hastsai, Uttam Nagar</p>
                                        <p>Delhi 110059</p>
                                        <p>India</p>
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
