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
        <div class="row">
            <main class="col-lg-12 order-1 order-lg-0 mt-4 mt-lg-0">

                <div>
                    <div class="stepper-wrapper">
                        <div class="stepper-item completed">
                            <div class="step-counter">1</div>
                            <div class="step-name">Registration</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">2</div>
                            <div class="step-name">Plans</div>
                        </div>
                        <div class="stepper-item active">
                            <div class="step-counter">3</div>
                            <div class="step-name">Payment</div>
                        </div>
                        <div class="stepper-item">
                            <div class="step-counter">4</div>
                            <div class="step-name">Thank You</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="b mb-0">Organizer information</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('saveOrganizer') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('layouts.flashMessge')
                            <div class="row mb-3 pl-2 pr-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Orgnizer Name</label>
                                        <input type="text" name="name" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Orgnization Email</label>
                                        <input type="email" name="email" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Password</label>
                                        <input type="password" name="password" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Confirm Password</label>
                                        <input type="password" name="password_confirmation" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Logo (Optional)</label>
                                        <input type="file" name="image" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Orgnizer Description</label>
                                        <textarea class="form-control" name="description" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Website (Optional)</label>
                                        <input type="text" name="website" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Facebook (Optional)</label>
                                        <input type="text" name="fb" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Instagram (Optional)</label>
                                        <input type="text" name="instagram" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>YouTube (Optional)</label>
                                        <input type="text" name="youtube" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>
</section>

@endsection
