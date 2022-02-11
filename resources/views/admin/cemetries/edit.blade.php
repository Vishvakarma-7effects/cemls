@extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Cemetery</li>
            </ol>
        </nav>
        <h1 class="mheading">Add Cemetery</h1>
        <section class="bxshadow">

<form method="post" action="{{route('cemeterys.update',$cemeterys->ID)}}" accept-charset="UTF-8">
@csrf
           @method('PUT')

            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Cemetery Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <input type="text" class="form-control" id="" name="cemetery_name" value="{{$cemeterys->cemetery_name}}">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <textarea class="form-control" id="" name="cemetery_desc" >{{$cemeterys->cemetery_desc}}</textarea>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Address</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                        <textarea class="form-control" id="" name="address">{{$cemeterys->address}}</textarea>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">City</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                <input type="text" class="form-control" id="" name="city" value="{{$cemeterys->city}}">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">State</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
                                <input type="text" class="form-control" id="" name="state" value="{{$cemeterys->state}}">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Country</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                <input type="text" class="form-control" id="" name="country" value="{{$cemeterys->country}}">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">Zip Code</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
                                <input type="text" class="form-control" id="" name="zip" value="{{$cemeterys->zip}}">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 text-right">
                    <button class="btn_lg btn_none">Add 360 Image</button>
                    <button class="btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0">Add Photos</button>
                    <button class="btn_lg btn_green">Add Videos</button>
                    <!-- <button class="btn_lg btn_green">save</button> -->
                    </div>
                </div>
            </div>
        <!-- </form> -->



            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                    <div class="loc_search position-relative">
                        <input type="text" class="form-control" id="" placeholder="enter location">
                        <a href="#"><i class="fa fa-search"></i></a>
                        <button class="btn_mid btn_bgreen px-3">Get Location</button>
                    </div>
                    </div>

                    <div class="col-lg-6 mb-1 mb-md-3 loctxt d-flex justify-content-center align-items-end">
                    <b>Latitude:</b> 40.3189719  <span class="d-inline-block pl-3"><b>Longitude:</b> -80.11131890000001</span>
                    </div>
                </div>

                <div class="mframe mb-4 pb-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 1</label>
                        <div class="col-sm-7 infosec">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>

                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 2</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 3</label>
                        <div class="col-sm-7 infosec">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 4</label>
                        <div class="col-sm-7 pl-lg-0 infosec">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 5</label>
                        <div class="col-sm-7 infosec">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 6</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                </div>


            </div>


            <div class="cntbox">
                <button class="btn_mid btn_green" type="submit">Update</button>
                <button class="btn_mid btn_none ml-3">Cancel</button>
                </div>

</form>
        </section>

    </section>

@endsection
