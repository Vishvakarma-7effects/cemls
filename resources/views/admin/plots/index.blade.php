   @extends('layouts.admin')

@section('content')
    <section class="panelrht">
     
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Plots</li>
        </ol>
    </nav>
    
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="text-right mb-4 pb-1">
        <a class="btn_mid btn_green" href="{{ url('plots/create')}}">Add Plot</a>
    </div>

    <div class="row">
        <div class="col-lg-2 col-12">
            <h1 class="mheading">Plots</h1>
        </div>
        <div class="col-lg-12 pl-lg-0 col-12 tabcnt">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @if($term!='')    
                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" href="{{url('plots')}}"
                        aria-controls="All" aria-selected="true">All</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" onClick="allData()" role="tab"
                        aria-controls="All" aria-selected="true">All</a>
                </li>
                @endif
                <li class="nav-item">
                
                    <a class="nav-link" id="indoor-tab" data-toggle="tab" href="#indoor" role="tab"
                        aria-controls="Indoor" aria-selected="true">Indoor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="outdoor-tab" data-toggle="tab" href="#outdoor" role="tab"
                        aria-controls="Outdoor" aria-selected="true">Outdoor</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link" id="above_ground-tab" data-toggle="tab" href="#above_ground" role="tab"
                        aria-controls="Above Ground" aria-selected="true">Above <br> Ground</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="below_ground-tab" data-toggle="tab" href="#below_ground" role="tab"
                        aria-controls="Below Ground" aria-selected="true">Below <br>Ground</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" id="burials-tab" data-toggle="tab" href="#burials" role="tab"
                        aria-controls="Burials" aria-selected="true">Burials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cremations" role="tab"
                        aria-controls="Cremations" aria-selected="false">Cremations</a>
                </li>
               
                
            </ul>

            <div class="searchbx position-relative">
              <form action="{{ route('plots.index') }}" method="GET" role="search">

                <input type="text" class="form-control" name="term" id="" placeholder="Cemetery Name or ID">
                <a href="#"><i class="fa fa-search"></i></a>
                  </form>
            </div>

            <ul class="nav nav-tabs ml-4 clearfix" id="switchTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="switchone-tab" data-toggle="tab" href="#switchone" role="tab"
                        aria-controls="switchone" aria-selected="true"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="switchtwo-tab" data-toggle="tab" href="#switchtwo" role="tab"
                        aria-controls="switchtwo" aria-selected="false"><i class="fas fa-map-marked-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>

        <div id="switchTabContent" class="tab-content">
            <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="burials-tab">
                    <section class="bxshadow mb-3 mb-md-5">
                        @foreach($plots as $key=>$row)
                        <div class="cntbox">
                            <table class="table mb-0 plot_table">
                                <tr>

                                <td width="76">
                                     <?php

                         
                         $plotgallery=getplotgallery($row->id);

                   if(!empty($plotgallery[0]->plotimage)) {  ?>

                                    <img src="{{asset('/uploads/plotgallery/' . $plotgallery[0]->plotimage)}}" class="plot_img" />
                                <?php } else { ?>

                    <img src="{{asset('/uploads/')}}/noimage.png" class="plot_img"/>
                                <?php } ?>
                                </td>
                                <td width="450px">
                                     <div class="plothead"> CemLS #{{$row->id}} </div>
                                     <div class="plotshead">

<?php
 //echo $row->cemetery_id;
                         
                         $cemeteryname=getcemeteryname($row->cemetery_id);
                   if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                            ?>
</div>
                                  
                                </td>
                                <td width="105">
                                    <div class="thead">Status</div>
                                    <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                </td>
                                <td width="205">
                                    <div class="thead text-center">Type</div>
                                    <div class="ttxt cl_green text-center">{{$row->plottype1}}, 
                                    {{$row->plottype2}}, 
                                    {{$row->plottype3}}
                                    
                                    </div>
                                </td>
                                <td style="padding: 15px;">
                                <div class="thead">Public</div>
                            <div class="d-flex">
                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                
                                        
                            </div>
                        
                             
                                <td width="40" align="right">
                                    <div class="moption">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    <ul class="moptionul">
                                        <i class="fa fa-caret-up"></i>
                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                        <li>
                                        <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
   
                    

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
                                                
                                        </li>
                                    </ul>
                                    </div>
                                </td>
                                </tr>
                            </table>
                        </div>
                        @endforeach

                    </section>

                      <?php
                         if (!request('term')) {
                            ?>
                    {{ $plots->links('layouts.custom') }}
<?php
  }
  ?>

                    </div>


<!--Code start for indoor-->

<div class="tab-pane fade" id="indoor" role="tabpanel" aria-labelledby="indoor-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                          
                            <section class="bxshadow mb-3 mb-md-5">
                                @foreach($Indoorplots as $key=>$row)
                                <div class="cntbox">
                                    <table class="table mb-0 plot_table">
                                        <tr>

                                            <td width="76">
                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                            </td>
                                            <td width="450px">
                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                <div class="plotshead">
                                                        <?php
                                                            $cemeteryname=getcemeteryname($row->cemetery_id);
                                                            if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                        ?>
                                                </div>
                                            </td>
                                            
                                            <td width="105">
                                                <div class="thead">Status</div>
                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                            </td>
                                            <td width="205">
                                                <div class="thead text-center">Type</div>
                                                <div class="ttxt cl_green text-center">{{$row->plottype1}}
                                                </div>
                                            </td>
                                            <td style="padding: 15px;">
                                                <div class="thead">Public</div>
                                                <div class="d-flex">
                                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                </div>
                                            </td>   
                                        
                                            <td width="40" align="right">
                                                <div class="moption">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    <ul class="moptionul">
                                                        <i class="fa fa-caret-up"></i>
                                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                        <li>
                                                            <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </section>
                       <?php
                         if (!request('term')) {
                            ?>
                        {{ $Indoorplots->links('layouts.custom') }}
                        <?php
  }
  ?>
                </div>


                    <!--Code start for burial tab-->
    <div class="tab-pane fade" id="burials" role="tabpanel" aria-labelledby="burials-tab">
                    <section class="bxshadow">
                     
                         
                            <section class="bxshadow mb-3 mb-md-5">

                                @foreach($burialsplots as $key=>$row)
                                   <div class="cntbox">
                                        <table class="table mb-0 plot_table">
                                                        <tr>

                                                            <td width="76">
                                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                                            </td>
                                                            <td width="450px">
                                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                                <div class="plotshead">
                                                                    <?php
                                                                        $cemeteryname=getcemeteryname($row->cemetery_id);
                                                                        if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                                    ?>
                                                                </div>
                                                        </td>
                                                
                                                            <td width="105">
                                                                <div class="thead">Status</div>
                                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                                            </td>
                                                            <td width="205">
                                                                <div class="thead text-center">Type</div>

                                                                <div class="ttxt cl_green text-center">{{$row->plottype3}}</div>                                          </div>

                                                            </td>
                                                            <td style="padding: 15px;">
                                                            <div class="thead">Public</div>
                                                            <div class="d-flex">
                                                                <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                            </div>
                                        
                                            
                                                            <td width="40" align="right">
                                                                <div class="moption">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                <ul class="moptionul">
                                                                    <i class="fa fa-caret-up"></i>
                                                                    <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                                    <li>
                                                                    <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                            
                                                                        @csrf
                                                                        @method('DELETE')

                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                            
                                                                    </li>
                                                                </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                        </table>
                                    </div>
                                 @endforeach
                            </section>
                       
                    </section>
                     <?php
                         if (!request('term')) {
                            ?>
                        {{ $burialsplots->links('layouts.custom') }}
                        <?php
  }
  ?>
                </div>
                    <!--Code end for burial tab-->
  <!--Code start for Cremations tab-->
   <div class="tab-pane fade" id="cremations" role="tabpanel" aria-labelledby="cremations-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                          
                            
                            <section class="bxshadow mb-3 mb-md-5">
                                @foreach($cremationsplots as $key=>$row)
                                <div class="cntbox">
                                    <table class="table mb-0 plot_table">
                                        <tr>
                                            <td width="76">
                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                            </td>
                                            <td width="450px">
                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                <div class="plotshead">
                                                        <?php
                                                            $cemeteryname=getcemeteryname($row->cemetery_id);
                                                            if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                        ?>
                                                </div>
                                            </td>
                                        
                                            <td width="105">
                                                <div class="thead">Status</div>
                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                            </td>
                                            <td width="205">
                                                
                                                <div class="thead text-center">Type</div>
                                                <div class="ttxt cl_green text-center">{{$row->plottype3}}                                    
                                                </div>
                                            </td>
                                            <td style="padding: 15px;">
                                                    <div class="thead">Public</div>
                                                    <div class="d-flex">
                                                        <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                    </div>
                                            </td>
                                
                                            <td width="40" align="right">
                                                <div class="moption">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    <ul class="moptionul">
                                                        <i class="fa fa-caret-up"></i>
                                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                            <li>
                                                                <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </section>
                    <?php
                         if (!request('term')) {
                            ?>
                        {{ $cremationsplots->links('layouts.custom') }}
                        <?php
  }
  ?>
                </div>

       <!--Code end for Cremations tab-->       


         <!--Code end for AboveGround tab-->     
 <div class="tab-pane fade" id="outdoor" role="tabpanel" aria-labelledby="out-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                        
                            <section class="bxshadow mb-3 mb-md-5">
                                @foreach($Outdoorplots as $key=>$row)
                                <div class="cntbox">
                                    <table class="table mb-0 plot_table">
                                        <tr>

                                            <td width="76">
                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                            </td>
                                            <td width="450px">
                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                <div class="plotshead">
                                                        <?php
                                                            $cemeteryname=getcemeteryname($row->cemetery_id);
                                                            if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                        ?>
                                                </div>
                                            </td>
                                            
                                            <td width="105">
                                                <div class="thead">Status</div>
                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                            </td>
                                            <td width="205">
                                                <div class="thead text-center">Type</div>
                                                <div class="ttxt cl_green text-center">{{$row->plottype1}}
                                                </div>
                                            </td>
                                            <td style="padding: 15px;">
                                                <div class="thead">Public</div>
                                                <div class="d-flex">
                                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                </div>
                                            </td>   
                                        
                                            <td width="40" align="right">
                                                <div class="moption">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    <ul class="moptionul">
                                                        <i class="fa fa-caret-up"></i>
                                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                        <li>
                                                            <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </section>
                     <?php
                         if (!request('term')) {
                            ?>
                        {{ $Outdoorplots->links('layouts.custom') }}
                        <?php
  }
  ?>
                </div>
       <!--Code end for AboveGround tab-->   
         <!--Code end for Below Ground tab-->       


 

           <!--Code end for Below Ground tab-->   

              <div class="tab-pane fade" id="above_ground" role="tabpanel" aria-labelledby="above_ground-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                            <section class="bxshadow mb-3 mb-md-5">
                                @foreach($abovegroundplots as $key=>$row)
                                <div class="cntbox">
                                    <table class="table mb-0 plot_table">
                                        <tr>

                                            <td width="76">
                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                            </td>
                                            <td width="450px">
                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                <div class="plotshead">
                                                        <?php
                                                            $cemeteryname=getcemeteryname($row->cemetery_id);
                                                            if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                        ?>
                                                </div>
                                            </td>
                                            
                                            <td width="105">
                                                <div class="thead">Status</div>
                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                            </td>
                                            <td width="205">
                                                <div class="thead text-center">Type</div>
                                                <div class="ttxt cl_green text-center">{{$row->plottype2}}
                                                </div>
                                            </td>
                                            <td style="padding: 15px;">
                                                <div class="thead">Public</div>
                                                <div class="d-flex">
                                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                </div>
                                            </td>   
                                        
                                            <td width="40" align="right">
                                                <div class="moption">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    <ul class="moptionul">
                                                        <i class="fa fa-caret-up"></i>
                                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                        <li>
                                                            <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </section>
                </div>

                           <!--Code end for Indoor Ground tab-->   

         <div class="tab-pane fade" id="below_ground" role="tabpanel" aria-labelledby="above_ground-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                            <section class="bxshadow mb-3 mb-md-5">
                        @foreach($belowgroundplots as $key=>$row)
                                <div class="cntbox">
                                    <table class="table mb-0 plot_table">
                                        <tr>

                                            <td width="76">
                                                <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                            </td>
                                            <td width="450px">
                                                <div class="plothead"> CemLS #{{$row->id}} </div>
                                                <div class="plotshead">
                                                        <?php
                                                            $cemeteryname=getcemeteryname($row->cemetery_id);
                                                            if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                                                        ?>
                                                </div>
                                            </td>
                                            
                                            <td width="105">
                                                <div class="thead">Status</div>
                                                <div class="ttxt cl_green">{{$row->plotstatus}}</div>
                                            </td>
                                            <td width="205">
                                                <div class="thead text-center">Type</div>
                                                <div class="ttxt cl_green text-center">{{$row->plottype2}}
                                                </div>
                                            </td>
                                            <td style="padding: 15px;">
                                                <div class="thead">Public</div>
                                                <div class="d-flex">
                                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->plot_public == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                                </div>
                                            </td>   
                                        
                                            <td width="40" align="right">
                                                <div class="moption">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    <ul class="moptionul">
                                                        <i class="fa fa-caret-up"></i>
                                                        <li><a href="{{ url('plots/'.$row->id.'/edit')}}">Edit</a></li>
                                                        <li>
                                                            <form action="{{ route('plots.destroy',$row->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                @endforeach
                            </section>

                              <?php
                         if (!request('term')) {
                            ?>
                        {{ $belowgroundplots->links('layouts.custom') }}
                        <?php
  }
  ?>
                        </div>
                    </section>
                </div>

                           <!--Code end for Indoor Ground tab-->   

                </div>
            </div>

           
        </div>



    </section>


    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
        function allData()
         {
            location.reload();
         }
 </script>




 </script>


<script>
    $(document).ready(function () {
        $(".radio").change(function () {
            var event_id = $(this).data("id");

            var selected_value = 0;
            if ($(this).is(":checked")) {
                selected_value = 1;
            }



            $.ajax({
                type: "POST",
                url: "{{url('plots/update-feature')}}",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'event_id': event_id,
                    'value': selected_value
                },
                dataType: "json",
                beforeSend: function () {
                    $('#ajax_loader').show();
                },
                success: function (data) {
                    console.log(data);
                },
                complete: function () {
                    $('#ajax_loader').hide();
                }
            });
        });
    });
</script>
@endsection
<script>
    function myFunction()
    {
        if(!confirm("Are you sure to delete this?"))
        event.preventDefault();
    }
</script>
<script>
        function allData()
         {
            location.reload();
         }
 </script>
   