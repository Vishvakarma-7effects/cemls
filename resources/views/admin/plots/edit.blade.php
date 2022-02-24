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
            <li class="breadcrumb-item active" aria-current="page">Edit Plot</li>
            </ol>
        </nav>
        <h1 class="mheading">Edit Plot</h1>
       <section class="bxshadow">

 <form action="{{ route('plots.update',$plot->id) }}" method="POST" enctype="multipart/form-data">

          
          @csrf
           @method('PUT')



                <div class="cntbox">
                    <div class="row">
                      <div class="col-lg-9 pr-lg-0">

                        <div class="form-group row">
                            <p class="col-lg-3 col-sm-3 col-form-label pr-0">Cemetery</p>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                              <select id="cemetery_id" name="cemetery_id" required class="form-control allmyselectdropdown">
                                            <option value="">Select Cemetery</option>
                                            @foreach($cemetery as $cemetery)
                                            <option {{ $plot->cemetery_id == $cemetery->ID ? 'selected' : '' }} value="{{$cemetery->ID}}">{{$cemetery->cemetery_name}}</option>
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

                          <div class="row"  id="cemeterylocation">
                            @if (!empty($plot->locationtitle1)) 

                              <div class="col-md-7">
                                  <div class="form-group row">
                                    <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">
                                      <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle1))
{
  echo $gettitle[0]->locationtitle1;
}

                                    ?>

                                  </label>
                                    <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="locationtitle1" id="" placeholder="" value="{{$plot->locationtitle1}}">
                                    </div>
                                  </div>
                              </div>
@endif
 @if (!empty($plot->locationtitle2))
                              <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0 text-right"> 
                                      <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle2))
{
  echo $gettitle[0]->locationtitle2;
}

                                    ?>
                                      
                                    </label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="locationtitle2" id="" placeholder="" value="{{$plot->locationtitle2}}">
                                    </div>
                                  </div>
                              </div>
                              @endif
 @if (!empty($plot->locationtitle3))

                               <div class="col-md-7">
                                  <div class="form-group row">
                                    <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">  <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle3))
{
  echo $gettitle[0]->locationtitle3;
}

                                    ?></label>
                                    <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="locationtitle3" id="" placeholder="" value="{{$plot->locationtitle3}}">
                                    </div>
                                  </div>
                              </div>
                                                            @endif
                                                             @if (!empty($plot->locationtitle4))


 <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">  <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle4))
{
  echo $gettitle[0]->locationtitle4;
}

                                    ?></label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="locationtitle4" id="" placeholder="" value="{{$plot->locationtitle4}}">
                                    </div>
                                  </div>
                              </div>
                                                                @endif
                                                             @if (!empty($plot->locationtitle5))

                               <div class="col-md-7">
                                <div class="form-group row">
                                  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">  <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle5))
{
  echo $gettitle[0]->locationtitle5;
}

                                    ?></label>
                                  <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" name="locationtitle5" id="" placeholder="" value="{{$plot->locationtitle5}}">
                                  </div>
                                </div>
                              </div>
                                   @endif
                                       @if (!empty($plot->locationtitle6))


                               <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">  <?php
                                   $gettitle=getplotlocationtitle($plot->cemetery_id);
if(!empty($gettitle[0]->locationtitle6))
{
  echo $gettitle[0]->locationtitle6;
}

                                    ?></label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" name="locationtitle6" id="" placeholder="" value="{{$plot->locationtitle6}}">
                                    </div>
                                  </div>
                              </div>
                             @endif
                              
                          </div>
                                   

                          <div class="row" id="cemeterylocationnew">
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
                                    <input class="form-check-input" type="radio" name="plotstatus" id="exampleRadios2" value="Reserved" <?= $plot->plotstatus == 'Reserved' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="exampleRadios2">
                                    Reserved
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plotstatus" id="exampleRadios2" value="Sold"  <?= $plot->plotstatus == 'Sold' ? 'checked' : '' ?>>
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
                                    <input class="form-check-input" type="radio" name="plottype1" id="inlineCheckbox2" value="Indoor" <?= $plot->plottype1 == 'Indoor' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Indoor</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype1" id="inlineCheckbox2" value="Outdoor" <?= $plot->plottype1 == 'Outdoor' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
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
                                    <input class="form-check-input" type="radio" name="plottype2" id="inlineCheckbox2" value="Above Ground"  <?= $plot->plottype2 == 'Above Ground' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Above Ground </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype2" id="inlineCheckbox2" value="Below Ground"  <?= $plot->plottype2 == 'Below Ground' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Below Ground</label>
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
                                  
                                    <input class="form-check-input" type="radio" name="plottype3" id="inlineCheckbox2" value="Burial" <?= $plot->plottype3 == 'Burial' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Burial</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plottype3" id="inlineCheckbox2" value="Cremation" <?= $plot->plottype3 == 'Cremation' ? 'checked' : '' ?>>
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Cremation</label>
                                  </div>
                                


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
                    <div class="col-lg-9 pr-lg-0">
                         <div class="form-group row">

                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Price Range</label>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">

<div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min" value="{{$plot->minprice}}" name="minprice">$
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" value="{{$plot->maxprice}}" name="maxprice">$
        </div>
      </div>
      <div class="slider">
        
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="100000" value="{{$plot->minprice}}" step="100">
        <input type="range" class="range-max" min="0" max="100000" value="{{$plot->maxprice}}" step="100">
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
                           <input type="number" name="price" class="form-control" id="" value="{{$plot->price}}" placeholder="">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control" name="description" >{{$plot->description}}</textarea>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                              <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Public</label>
                              <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plot_public" id="exampleRadios1" value="yes" <?= $plot->plot_public == 'yes' ? 'checked' : '' ?>>
                                  <label class="form-check-label col-form-label" for="exampleRadios1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plot_public" id="exampleRadios2" value="no"  <?= $plot->plot_public == 'no' ? 'checked' : '' ?>>
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
                          <textarea class="form-control" name="internal_notes" >{{$plot->internal_notes}}</textarea>
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
                   
                    
                
                  <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                         <div class="form-group row">

                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Video Url</label>
                             <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control" name="videourl" >{{$plot->videourl}}</textarea>
                      
                   
                 </div></div>




                <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                         <div class="form-group row">

                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Plot Image</label>
                             <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <input type="file" class="form-control" name="plotimage[]" multiple>
                      </div>


                </div>
                <div class="cntbox">
                   
                   <table class="table mb-0 plot_table">
                    <tbody>
                      <tr class="" style="">

                        <?php

                         
                         $plotgallery=getplotgallery($plot->id);

                   if(!empty($plotgallery[0]->plotimage)) {  

                    foreach($plotgallery as $galleryimage)
                    {

                            ?>
                                <td width="76" style="padding: 4px;">
                              <a href="#" class="btn btn-sm btn-outline-danger py-0 deleteMovie" style="font-size: 0.8em;" id="deleteMovie" data-id="{{ $galleryimage->id }}">
   <i class="fa fa-trash-can" aria-hidden="true"></i>
</a>

                                  
                                                                 <img src="{{asset('/uploads/plotgallery/' . $galleryimage->plotimage)}}" class="plot_img"/>
                                </td>
                                 
                              <?php }} ?>
                              </tr>
                                </tr>



                              </tbody></table> 
                
                 
                   
                 </div></div></div>


                </div></div>

                <div class="cntbox">  
                    <button class="btn_mid btn_green" type="submit">Update</button>
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
  $('#cemeterylocation').hide();

 
                
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
                     $('#cemeterylocation').hide();

                    var location2 = data.location;
                 if(location2!= null){


                
                    var iframe = '  <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0 text-right">' + location2 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle2" id="" placeholder=""></div>';
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
                     $('#cemeterylocation').hide();

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
                      $('#cemeterylocation').hide();

                    var location4 = data.location;

                 if(location4!= null){


               
                    var iframe = '  <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0 text-right">' + location4 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle4" id="" placeholder=""></div>';
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
                    $('#cemeterylocation').hide();

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
                     $('#cemeterylocation').hide();

                    var location6 = data.location;
                 if(location6!= null){


               
                    var iframe = '  <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0 text-right">' + location6 + '</label> <div class="col-sm-9 pl-3 pl-md-4"><input type="text" class="form-control" name="locationtitle6" id="" placeholder=""></div>';
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

<script>

     $(function() {
  $(".deleteMovie").click(function (e) {
    if(!confirm("Do you really want to delete plot image?")) {
       return false;
     }
         e.preventDefault();
        var id = $(this).data("id");



        $.ajax({
            type: "POST",
            url: "{{url('plots/get-destroyplotimage')}}",
            data: {
                '_token': '{{ csrf_token() }}',
                'venue_id': id
            },
            dataType: "json",
            
            success: function (data) {
             //alert(data);  
              location.reload(true);               




              
            }
        });

    });
   }); 


</script>
@endsection
