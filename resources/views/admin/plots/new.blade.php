@extends('layouts.admin')
@section('content')
<style>

datalist {
  display: flex;
  justify-content: space-between;
  color: #6A7175;
  /* width: 100%; */
}
#customRange1{
    width:100%;
}


</style>
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Plot</li>
            </ol>
        </nav>
        <h1 class="mheading">Add Plot</h1>
       <section class="bxshadow">

  <form method="post" action="{{route('plots.store')}}" accept-charset="UTF-8">
        @csrf



                <div class="cntbox">
                    <div class="row">
                      <div class="col-lg-9 pr-lg-0">

                        <div class="form-group row">
                            <p class="col-lg-3 col-sm-3 col-form-label pr-0">Cemetery</p>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                              <select id="cemetery_id" name="cemetery_id" required class="form-control allmyselectdropdown">
                                            <option value="">Select Cemetery</option>
                                            @foreach($cemeteries as $cemetery)
                                            <option value="{{$cemetery->ID}}">{{$cemetery->cemetery_name}}</option>
                                            @endforeach
                                        </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <p class="col-lg-3 col-sm-3 col-form-label pr-0">Location ID</p>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                              <p>CemLS#30453</p>
                            </div>
                          </div>

                          <div class="row" id="cemeterylocation">
                              <div class="col-md-7">
                                  <div class="form-group row" id="location1">
                                    
                                    
                                   
                                  </div>
                              </div>

                              <div class="col-md-5">
                                  <div class="form-group row" id="location2">
                                   
                                  </div>
                              </div>


                               <div class="col-md-7">
                                  <div class="form-group row" id="location3">
                                    
                                    
                                   
                                  </div>
                              </div>

                             <div class="col-md-5">
                                  <div class="form-group row" id="location4">
                                   
                                  </div>
                              </div>

                               <div class="col-md-7">
                                  <div class="form-group row" id="location5">
                                    
                                    
                                   
                                  </div>
                              </div>


                               <div class="col-md-5">
                                  <div class="form-group row" id="location6">
                                   
                                  </div>
                              </div>
                          </div>

                         <!-- <div class="row">
                              <div class="col-md-7">
                                  <div class="form-group row">
                                    <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">Lot</label>
                                    <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="lot" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">Row</label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="row" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>
                             
                          </div>
                          <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Grave</label>
                                  <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="grave" id="" placeholder="">
                                  </div>
                                </div>
                              </div>
                              
                        </div>-->
                        <!-- <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                <div class="col-md-3 col-sm-9 pl-3 pl-md-4 d-flex "></div>
                                <div class="col-md-5 col-sm-9 pl-3 pl-md-4 d-flex ">
                                  <input type="text" class="form-control" id="" placeholder="Create Custom label ">
                                  <button class="btn_search">
                                        <i class="fa fa-plus"  aria-hidden="true"></i>
                                    </button>
                                </div>
                              </div>
                            </div>
                           
                        </div>  -->
                        
                        <div class="row">
                          <div class="col-md-7">
                              <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Status</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plotstatus" id="exampleRadios1" value="Available" checked>
                                    <label class="form-check-label col-form-label" for="exampleRadios1">
                                      Available
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plotstatus" id="exampleRadios2" value="Reserved">
                                    <label class="form-check-label col-form-label" for="exampleRadios2">
                                    Reserved
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plotstatus" id="exampleRadios2" value="Sold">
                                    <label class="form-check-label col-form-label" for="exampleRadios2">
                                      Sold
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                              <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Types</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">

                                   <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype" id="inlineCheckbox2" value="Burial" checked>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Burial</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype" id="inlineCheckbox2" value="Cremation">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Cremation</label>
                                  </div>
                                  
                                  
                                


                                
                                </div>
                              </div>
                            </div>
                        </div>

 <div class="row">
                          <div class="col-md-7">
                              <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1"></label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">

                                   
                                  
                                   <div class="form-check form-check-inline">
                                  
                                    <input class="form-check-input" type="radio" name="plottype2" id="inlineCheckbox2" value="Indoor">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Indoor</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype2" id="inlineCheckbox2" value="Outdoor">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
                                  </div>
                                


                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      

                      <div class="col-lg-3 text-right">
                        <!--<button class="btn_lg btn_none">Add 360 Image</button> -->
                        <button class="btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0">Add Photos</button>
                        <button class="btn_lg btn_green">Add Videos</button>
                      </div>
                    </div>
                </div>
                <div class="cntbox">
                   
                    
                
                  <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                         <div class="form-group row">

                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Price Range</label>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">

<div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min" value="0" name="minprice">$
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" value="100000" name="maxprice">$
        </div>
      </div>
      <div class="slider">
        
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="100000" value="0" step="100">
        <input type="range" class="range-max" min="0" max="100000" value="100000" step="100">
      </div>                               
                 <br>            

                                <!--<div class="col-md-6 col-sm-9">
                                   <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Price Range</label>
                                      <input type="text" value="$500" class="form-control" id="" placeholder="">
                            </div>-->
                    </div>
                   </div>      
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Price</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                           <input type="number" name="price" class="form-control" id="" placeholder="">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control" name="description" ></textarea>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                              <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Public</label>
                              <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plot_public" id="exampleRadios1" value="yes" checked>
                                  <label class="form-check-label col-form-label" for="exampleRadios1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plot_public" id="exampleRadios2" value="no">
                                  <label class="form-check-label col-form-label" for="exampleRadios2">
                                  No
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Internal Notes</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control" name="internal_notes" ></textarea>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="cntbox">
                    <div class="row">
                      <div class="col-lg-6 mb-3">
                        <div class="loc_search position-relative">
                          <input type="text" class="form-control" id="pac-input" placeholder="enter location">
                          <a href="#"><i class="fa fa-search"></i></a>
                          <a id="getlocation" class="btn_mid btn_bgreen px-3">Get Location</a>
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

                    
                </div>

                <div class="cntbox">  
                    <button class="btn_mid btn_green" type="submit">Add</button>
                    <button class="btn_mid btn_none ml-3">Cancel</button>
                  </div>
  </form>
            </section>
    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <script>
      
      $(document).ready(function() {
  $('select').select2().select2();
});
  </script>

  

    <script>
   
    $(document).ready(function () {
  $("#cemetery_id").change(function () {



        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle1')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location = data.location;
             



                if (data.status) {
                    $('#locationlabel').show();
                    var location = data.location;

                 if(location!= null)
                 {

 $('#location1').show();
                
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location + '</label> <div class="col-md-6 col-sm-9 pl-3 pl-md-4 "><input type="text" class="form-control" name="locationtitle1" id="" placeholder=""></div>';
                    $('#location1').html(iframe);
                 

                 
                }
                else
                {
  $('#location1').hide();

                }
             }
            }
        });

    });
   }); 

$(function() {
  $("#cemetery_id").change(function () {



        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle2')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location2 = data.location;
             



                if (data.status) {
                   $('#location2').show();
                    var location2 = data.location;
                 if(location2!= null){


                
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location2 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle2" id="" placeholder=""></div>';
                    $('#location2').html(iframe);
               
                 
                }
                else
                {
  $('#location2').hide();

                }
             }
            }
        });

    });
   }); 
$(function() {
  $("#cemetery_id").change(function () {
//alert('hi');


        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle3')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location = data.location;
             



                if (data.status) {
                   $('#location3').show();
                    var location3 = data.location;
                 if(location3!= null){


                 
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location3 + '</label> <div class="col-md-6 col-sm-9 pl-3 pl-md-4 "><input type="text" class="form-control" name="locationtitle3" id="" placeholder=""></div>';
                    $('#location3').html(iframe);
                
                 
                }
                else
                {
  $('#location3').hide();

                }
             }
            }
        });

    });
   }); 

$(function() {
  $("#cemetery_id").change(function () {



        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle4')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location4 = data.location;
             



                if (data.status) {
                    $('#location4').show();
                    var location4 = data.location;

                 if(location4!= null){


               
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location4 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle4" id="" placeholder=""></div>';
                    $('#location4').html(iframe);
               
                 
                }
                else
                {
  $('#location4').hide();

                }
             }
            }
        });

    });
   }); 
$(function() {
  $("#cemetery_id").change(function () {
//alert('hi');


        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle5')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location5 = data.location;
             



                if (data.status) {
                  $('#location5').show();
                    var location5 = data.location;
                 if(location5!= null){


                
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location5 + '</label> <div class="col-md-6 col-sm-9 pl-3 pl-md-4 "><input type="text" class="form-control" name="locationtitle5" id="" placeholder=""></div>';
                    $('#location5').html(iframe);
              
                 
                }
                else
                {
  $('#location5').hide();

                }
             }
            }
        });

    });
   }); 

$(function() {
  $("#cemetery_id").change(function () {



        $.ajax({
            type: "POST",
            url: "{{url('plots/get-locationtitle6')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': $(this).val()
            },
            dataType: "json",
            //alert(data);
            success: function (data) {
                var location6 = data.location;
             



                if (data.status) {
                   $('#location6').show();
                    var location6 = data.location;
                 if(location6!= null){


               
                    var iframe = '  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">' + location6 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle6" id="" placeholder=""></div>';
                    $('#location6').html(iframe);
                  
                 
                }
                else
                {
  $('#location6').hide();

                }
             }
            }
        });

    });
   }); 
</script>
@endsection
