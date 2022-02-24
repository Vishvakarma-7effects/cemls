@extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Cemetery</li>
            </ol>
        </nav>
        <h1 class="mheading">Edit Cemetery</h1>
        <section class="bxshadow">
           <form action="{{ route('cemeteries.update',$cemeterys->ID) }}" method="POST" enctype="multipart/form-data">

                    
                    @csrf
           @method('PUT')

             <input type="hidden" class="form-control" id="cemetery_latitude" name="cemetery_latitude" id="">
                            <input type="hidden" class="form-control" id="cemetery_longitude"  name="cemetery_longitude" id="">
            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Cemetery Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <input type="text" class="form-control" name="cemetery_name" value="{{$cemeterys->cemetery_name}}" id="" placeholder="">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <textarea class="form-control" name="cemetery_desc">{{$cemeterys->cemetery_desc}}</textarea>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Address</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <textarea class="form-control" name="address">{{$cemeterys->address}}</textarea>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">City</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="city" value="{{$cemeterys->city}}" id="" placeholder="">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">State</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="state" value="{{$cemeterys->state}}" id="" placeholder="">
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Country</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="country" value="{{$cemeterys->country}}" id="" placeholder="">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">Zip Code</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
        <input type="text" class="form-control" id=""  name="zip"  value="{{$cemeterys->zip}}" placeholder="">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1"> Add 360 Image</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                     <input data-id="userstatus" name="status" class="form-control radio userstatus btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0" id="userstatus" type="checkbox" data-toggle="toggle" data-on="Active" {{ $cemeterys->imagestatus == 1 ? 'checked' : '' }} data-off="Inactive"  data-size="small" data-onstyle="primary">
                                </div>
                                </div>
                            </div>

 </div>
 </div>
                    <div class="col-lg-3 text-right">
                    <!--<button class="btn_lg btn_none">Add 360 Image</button>-->

                    <input type="file" name="image" class="btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0">Add Photos
                    <button class="btn_lg btn_green">Add Videos</button>
                    </div>
                </div>
            </div>
            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                    <div class="loc_search position-relative">
                        <input type="text" name="location"  value="{{$cemeterys->location}}" class="form-control" id="pac-input" placeholder="enter location">
                        <a href="#"><i class="fa fa-search"></i></a>
                        <button class="btn_mid btn_bgreen px-3">Get Location</button>
                    </div>
                    </div>

                    <div class="col-lg-6 mb-1 mb-md-3 loctxt d-flex justify-content-center align-items-end">
                    <b>Latitude:</b> <span id='latbox'></span><span class="d-inline-block pl-3"><b>Longitude:</b> <span id='lngbox'></span></span>
                    </div>
                </div>

                  <div class="mframe mb-4 pb-1">
                      <div id="map" style="height:400px;"></div>
                                    <div id="infowindow-content">
                                        <span id="place-name" class="title"></span><br />
                                        <span id="place-address"></span>
                                    </div>
                    </div>


                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 1</label>
                        <div class="col-sm-7 infosec">
                            <input type="text" class="form-control"  name="locationtitle1" id="" placeholder=""  value="{{$cemeterys->locationtitle1}}">
                            <div class="infobx"><i class="fa fa-info"  data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>

                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 2</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" name="locationtitle2" id="" placeholder="" value="{{$cemeterys->locationtitle2}}">
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
                            <input type="text" class="form-control" name="locationtitle3" id="" placeholder="" value="{{$cemeterys->locationtitle3}}">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 4</label>
                        <div class="col-sm-7 pl-lg-0 infosec">
                            <input type="text" class="form-control" name="locationtitle4" id="" placeholder="" value="{{$cemeterys->locationtitle4}}">
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
                            <input type="text" class="form-control" name="locationtitle5" id="" placeholder="" value="{{$cemeterys->locationtitle5}}">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 6</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" name="locationtitle6" id="" placeholder="" value="{{$cemeterys->locationtitle6}}">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="cntbox">
                <button class="btn_mid btn_green">Update</button>
                  </form>

                <button class="btn_mid btn_none ml-3">Cancel</button>
                </div>
        </section>

    </section>

@endsection
