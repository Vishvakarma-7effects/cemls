   @extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <!--<nav aria-label="breadcrumb">-->
        <!--    <ol class="breadcrumb">-->
        <!--    <li class="breadcrumb-item"><a href="#">Property</a></li>-->
        <!--    <li class="breadcrumb-item active" aria-current="page">Plots</li>-->
        <!--    </ol>-->
        <!--</nav>-->

        <!--@if ($message = Session::get('success'))-->
        <!--    <div class="alert alert-success">-->
        <!--        <p>{{ $message }}</p>-->
        <!--    </div>-->
        <!--@endif-->
        
        <!--<div class="col-md-7 col-6 text-right">-->
        <!--    <a class="btn_mid btn_green" href="{{ url('plot/create')}}">Add Plot</a>-->
        <!--</div>-->

        <!--<div class="row">-->
        <!--    <div class="col-lg-2 col-12"><h1 class="mheading">Plots</h1></div>-->
        <!--    <div class="col-lg-10 pl-lg-0 col-12 tabcnt">-->
        <!--        <ul class="nav nav-tabs" id="myTab" role="tablist">-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#burials" role="tab" aria-controls="Burials" aria-selected="true">Burials</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cremations" role="tab" aria-controls="Cremations" aria-selected="false">Cremations</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#indoor" role="tab" aria-controls="Indoor" aria-selected="false">Indoor</a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#outdoor" role="tab" aria-controls="Outdoor" aria-selected="false">Outdoor</a>-->
        <!--            </li>-->
        <!--        </ul>-->

        <!--        <div class="searchbx position-relative">-->
        <!--            <input type="text" class="form-control" id="" placeholder="Cemetery Name">-->
        <!--            <a href="#"><i class="fa fa-search"></i></a>-->
        <!--        </div>-->

        <!--        <ul class="nav nav-tabs ml-4 clearfix" id="switchTab" role="tablist">-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link active" id="switchone-tab" data-toggle="tab" href="#switchone" role="tab" aria-controls="switchone" aria-selected="true"><i class="fa fa-bars"></i></a>-->
        <!--            </li>-->
        <!--            <li class="nav-item">-->
        <!--            <a class="nav-link" id="switchtwo-tab" data-toggle="tab" href="#switchtwo" role="tab" aria-controls="switchtwo" aria-selected="false"><i class="fas fa-map-marked-alt"></i></a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
        
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
        <div class="col-lg-10 pl-lg-0 col-12 tabcnt">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#burials" role="tab"
                        aria-controls="Burials" aria-selected="true">Burials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cremations" role="tab"
                        aria-controls="Cremations" aria-selected="false">Cremations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#indoor" role="tab"
                        aria-controls="Indoor" aria-selected="false">Indoor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#outdoor" role="tab"
                        aria-controls="Outdoor" aria-selected="false">Outdoor</a>
                </li>
            </ul>

            <div class="searchbx position-relative">
                                <form action="{{ route('plots.index') }}" method="GET" role="search">

                <input type="text" class="form-control" id="" name="term" placeholder="Cemetery Name or ID">
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
                    <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">
                    <section class="bxshadow mb-3 mb-md-5">
                        @foreach($plots as $key=>$row)
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
                                    <div class="ttxt cl_green text-center">{{$row->plottype}}, 
                                    {{$row->plottype2}}
                                    
                                    </div>
                                </td>
                                <td style="padding: 15px;">
                                <div class="thead">Public</div>
                            <div class="d-flex">
                                    <input data-id="{{$row->id}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $row->feature == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"></div></div> &nbsp;&nbsp;
                                
                                        
                            </div>
                        
                                <!--<td width="105">
                                    <div class="thead">Lat Long</div>
                                    <div class="ttxt cl_green">Yes</div>
                                </td>-->
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

                  <!--  <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
                        <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link pn_arrow" href="#" aria-label="Previous">
                            <i class="fa fa-caret-left"></i>
                            </a>
                        </li>
                        <li class="page-item "><a class="page-link " href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item">
                            <a class="page-link pn_arrow" href="#" aria-label="Next">
                            <i class="fa fa-caret-right"></i>
                            </a>
                        </li>
                        </ul>
                    </nav>-->
                      <?php
                         if (!request('term')) {
                            ?>
                    {{ $plots->links('layouts.custom') }}
<?php
  }
  ?>

                    </div>

                    <div class="tab-pane fade" id="cremations" role="tabpanel" aria-labelledby="cremations-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                            ...

                        </div>
                    </section>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade pb-4" id="switchtwo" role="tabpanel" aria-labelledby="switchtwo-tab">
                <div class="mframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>



    </section>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

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
   