@extends('layouts.admin')

@section('content')
{{-- {{dd($user)}} --}}
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </nav>
        
         @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <h1 class="mheading">My Account</h1>
        <section class="bxshadow">

            <div class="cntbox">
                <div class="userbx clearfix">
                    <div class="user_img">
                        
                    <img src="{{ asset('newPublic/images/userimg.png') }}" alt="" />
                    <span class="upimg">
                        <input type="file" id="" name="">
                        <i class="fa fa-camera"></i>
                    </span>
                    </div>
                    <div class="user_info">
                        <h2>{{ $user->name.' '.$user->last_name}}
                             <i class="fa fa-pencil editbx"></i>
                        </h2>
                        <div class="uemail">{{ $user->gmail }} 
                            {{-- <i class="fa fa-pencil editbx"></i> --}}
                        </div>
                        <div class="ujoin">Member <small>since</small> 20 April 2018</div>
                        <button class="btn_mid btn_green">Update</button>
                    </div>
                </div>
            </div>

            <div class="cntbox">
                <h2 class="sheading">Change Password</h2>
                <div class="row">
                    <div class="col-lg-6 pr-lg-4">
                        <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label pr-0">New Password</label>
                        <div class="col-sm-8 pl-3 pl-md-4">
                            <input type="password" class="form-control" id="" placeholder="">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pr-lg-4">
                        <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label pr-0">Confirm Password</label>
                        <div class="col-sm-8 pl-3 pl-md-4">
                            <input type="password" class="form-control" id="" placeholder="">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row mb-0">
                        <label for="" class="col-sm-4 col-form-label pr-0">&nbsp;</label>

                        <div class="col-sm-8">
                            <button class="btn_mid btn_green">Change Password</button>
                            <button class="btn_mid btn_none float-right mw_initial">Cancel</button>
                        </div>
                        </div>
                    </div>
                </div>


            </div>
            <form action="{{url('user/updateProfile')}}" method="post">
              @csrf
                <div class="cntbox">
                    <h2 class="sheading">Address</h2>
                    <div class="row">
                        <div class="col-lg-6 pr-lg-4">
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label pr-0">Address Line 1</label>
                            <div class="col-sm-8 pl-3 pl-md-4">
                                <!-- <input type="text" class="form-control" id="" placeholder="" value="{{$user->address}}"> -->
                                <input type="text" class="form-control" name="address_line1" value="{{$user->address_line1}}">
                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-lg-4">
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label pr-0">Address Line 2</label>
                            <div class="col-sm-8 pl-3 pl-md-4">
                                <!-- <input type="password" class="form-control" id="" placeholder=""> -->
                                <input type="text" class="form-control" name="address_line2" value="{{$user->address_line2}}">
                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pr-lg-4">
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label pr-0">City</label>
                            <div class="col-sm-8 pl-3 pl-md-4">
                                <!-- <input type="password" class="form-control" id="" placeholder=""> -->
                                <input type="text" class="form-control" name="city" value="{{$user->city}}">
                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pl-lg-4">
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label pr-0">State</label>
                            <div class="col-sm-8 pl-3 pl-md-4">
                                <!-- <input type="password" class="form-control" id="" placeholder=""> -->
                                <input type="text" class="form-control" name="state" value="{{$user->state}}">
                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pr-lg-4">
                            <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label pr-0">Zip</label>
                            <div class="col-sm-8 pl-3 pl-md-4">
                                <!-- <input type="password" class="form-control" id="" placeholder=""> -->
                                <input type="text" class="form-control" name="zip" value="{{$user->zip}}">
                            </div>
                            </div>
                        </div>

                       <div class="col-sm-6 pl-lg-4">
                            <div class="form-group row">
                            <div class="col-sm-8 pl-3 pl-md-4">

                            <button class="btn_mid btn_green float-right mw_initial" type="submit">Update</button>
                            </div>
                            </div>
                        </div>
               

                    </div>
                </div>
                
                 <div class="cntbox">
                    <h2 class="sheading">Delete Account</h2>
                    <button type="button" class="btn_mid btn_none" style="
    cursor: not-allowed;" >Delete This Account</button>
                 </div>
                 </form>

        </section>

    </section>
@endsection
