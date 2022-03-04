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
    <form method="post" action="{{route('cemeteries.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf
            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Cemetery Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <input type="text" class="form-control" name="cemetery_name" id="" placeholder="">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <textarea class="form-control" name="cemetery_desc"></textarea>
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Address</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        </div>

                        <div class="row">

<div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Country</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <select id="countries_id" name="countries_id" class="form-control allmyselectdropdown">
                                            <option value="">Select Country</option>
                                            @foreach($countries as $row)
                                            <option value="{{$row->id}}">{{$row->countries}}</option>
                                            @endforeach
                                        </select>  
                                </div>
                                </div>
                            </div>


                       

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">State</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
                                <select id="state_select" class="form-control" name="state">
                                <option value=""> -- Select State -- </option>
                                </select>
                                    <!-- <input type="text" class="form-control" name="state" id="" placeholder=""> -->
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                 <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">City</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="city" id="" placeholder="">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">Zip Code</label>
                                <div class="col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" id=""  name="zip" placeholder="">
                                </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1"> Add 360 Image</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                        <input data-id="userstatus" class=" form-control radio userstatus btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0" name="status" id="userstatus" type="checkbox" data-toggle="toggle" data-on="Active" checked data-off="Inactive"  data-size="small" data-onstyle="primary">

                                </div>
                                </div>
                            </div>

 </div>
 </div>
                    <!--<div class="col-lg-3 text-right">
                    <!--<button class="btn_lg btn_none">Add 360 Image</button>

                    <button class="btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0">Add Photos</button>
                    <button class="btn_lg btn_green">Add Videos</button>
                    </div>-->
                </div>
            </div>
            <div class="cntbox">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                    <div class="loc_search position-relative">
                        <input type="text" name="location" class="form-control" id="pac-input" placeholder="enter location">
                        <a href="#"><i class="fa fa-search"></i></a>
                        <button class="btn_mid btn_bgreen px-3">Get Location</button>
                    </div>
                    </div>

                    <div class="col-lg-6 mb-1 mb-md-3 loctxt d-flex justify-content-center align-items-end">
                    <b>Latitude:</b> 40.3189719  <span class="d-inline-block pl-3"><b>Longitude:</b> -80.11131890000001</span>
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
                            <input type="text" class="form-control"  name="locationtitle1" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info"  data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>

                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 2</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" name="locationtitle2" id="" placeholder="">
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
                            <input type="text" class="form-control" name="locationtitle3" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 4</label>
                        <div class="col-sm-7 pl-lg-0 infosec">
                            <input type="text" class="form-control" name="locationtitle4" id="" placeholder="">
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
                            <input type="text" class="form-control" name="locationtitle5" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ml-lg-5">
                        <div class="form-group position-relative row">
                        <label for="" class="col-sm-5 col-form-label pr-0">Location ID: Title 6</label>
                        <div class="col-sm-7 infosec pl-lg-0">
                            <input type="text" class="form-control" name="locationtitle6" id="" placeholder="">
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                </div>


            </div>
 <div class="cntbox">
              

              

             
                <div class="row">
                   <div class="col-lg-9 mb-3">
                        <div class="form-group position-relative row">
                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Video Url</label>
                        <div class="col-sm-7 infosec">
                          <textarea class="form-control" name="videourl"></textarea>
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                  
                </div>

  <div class="row">
                   <div class="col-lg-9 mb-3">
                        <div class="form-group position-relative row">
                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Cemetery Image</label>
                        <div class="col-sm-7 infosec">
                          <input type="file" class="form-control" name="cemeteryimage[]" multiple>
                            <div class="infobx"><i class="fa fa-info" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></div>
                        </div>

                        </div>
                    </div>
                  
                </div>

            </div>
            <div class="cntbox">
                <button class="btn_mid btn_green">Add</button>
                  </form>

                <button type="button" class="btn_mid btn_none ml-3" onClick="myclick()">Cancel</button>
                </div>
                
        </section>

    </section>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   function myclick()
   {
    document.location.href ="{{ url('cemeteries') }}";
   }

</script>


<script>
       
        $(document).ready(function () {
            $('#countries_id').on('change', function () 
            {
                var countries_id = this.value;
                $("#state_select").html('');

                $.ajax({
                    url: "{{url('fetchstates')}}",
                    type: "POST",
                    data: {
                        countries_id: countries_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) 
                    {
                        $('#state_select').html('<option value="">Select States</option>');

                        $.each(result, function (key, value) {
                            $("#state_select").append('<option value="' + value
                                .id + '">' + value.state + '</option>');
                        });
                    }
                });


            });
        });
  </script>
