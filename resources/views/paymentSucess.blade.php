@extends('layouts.main')
@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Organizer Registration</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Organizer Registration</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div>
            <div class="stepper-wrapper">
                <div class="stepper-item completed">
                    <div class="step-counter">1</div>
                    <div class="step-name">Registration</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter">2</div>
                    <div class="step-name">Plans</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter">3</div>
                    <div class="step-name">Payment</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter">4</div>
                    <div class="step-name">Thank You</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="content">
                        <h1>Payment Success !</h1>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
                        <a href="{{url('dashboard')}}">Go to Dashboard</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
