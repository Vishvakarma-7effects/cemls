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
                            <h4 class="title-section float-left">Account Details</h4>
                            <div class="clearfix"></div>
                        </header>
                        @include('layouts.flashMessge')
                        <form action="{{ url('user/updateProfile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3 pl-2 pr-2">
                                @hasrole('organizer')
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Organizer Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <input type="hidden" name="last_name" value="{{$user->last_name}}" required="required" class="form-control"/>
                                @else

                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="required">First Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="last_name" class="required">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" value="{{$user->last_name}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                @endhasrole

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Mobile No.</label>
                                        <input type="number" class="form-control" name="phone" value="{{$user->phone}}"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly=""  required="required"/>
                                    </div>
                                </div>

                                @hasrole('organizer')
                                <!-----------ONLY FOR ORGANIZER---------->

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" value="www.website.com" name="website" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" value="www.facebook.com" name="fb" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" value="www.instagram.com" name="instagram" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>YouTube</label>
                                        <input type="text" value="www.youtube.com" name="youtube" class="form-control"/>
                                    </div>
                                </div
                                <!-----------ONLY FOR ORGANIZER---------->
                                @else
                                <div></div>
                                @endhasrole

                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea  class="form-control" name="address">{{$user->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Password Change</label>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" name="current_password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="new_confirm_password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
