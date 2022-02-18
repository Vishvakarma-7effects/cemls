
@extends('layouts.admin')

@section('content')


<style>
    .widget {
    width: 47%;
    display: inline-block;
}

.update_text .btn_mid {
    margin-top: 10px;
}
</style>
<section class="panelrht">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Property</a></li>
          <li class="breadcrumb-item active" aria-current="page">Widgets</li>
      </ol>
  </nav>
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
    <div class="col-md-5 col-6">
      <h1 class="mheading"></h1>
  </div>

</div>
<br>
<div class="row">
    <div class="col-lg-2 col-12">
        <h1 class="mheading">Widgets</h1>
    </div>
    <div class="col-lg-10 pl-lg-0 col-12 tabcnt">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#burials" role="tab"
                aria-controls="Burials" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cremations" role="tab"
                aria-controls="Cremations" aria-selected="false">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#indoor" role="tab"
                aria-controls="Indoor" aria-selected="false">Inactive</a>
            </li>

        </ul>

        <div class="searchbx position-relative">
            <input type="text" class="form-control" id="" placeholder="Cemetery Name or ID">
            <a href="#"><i class="fa fa-search"></i></a>
        </div>


    </div>
</div>
<div id="switchTabContent" class="tab-content">
    <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
      <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">
            <section class="bxshadow mb-3 mb-md-5">
             <div class="cntbox">
                <div class="">
                    <?php $i =1; ?>
                    @foreach ($cemeterys as $cemKey => $cemVal)
                    <?php $i++; ?>
                    <div class="widget  <?php if ($i%2!= '0') { ?> custm_wrapper <?php } ?>">

                        <div class="bxshadow p-3 rounded">
                          <div class="d-flex">
                             <div class="w-25">
                                <img src="https://new.cemeterylistingservice.com/newPublic/images/img1.jpg" alt="" height="100%;" width="100%">
                            </div>
                            <div class="w-75 ml-4">
                                <div class="r_heading">
                                   <h2>{{$cemVal->cemetery_name}}
                                   </h2>
                               </div>

                               <div class="r_text">john.doe@gmail.com </div>
                               <div class="r_desc">


                               </div>
                           </div>
                       </div>
                       <div class="d-flex justify-content-between update_text pt-3">
                         <div class="t_update ">Last Updated 10 months ago
                           <div class="toggle btn btn-primary btn-sm" data-toggle="toggle" role="button" style="width: 77.3021px; height: 31px;">
                            <input data-id="{{$cemVal->id}}" class="form-control" id="" type="checkbox" data-toggle="toggle" data-on="Active" checked="" data-off="Inactive" data-size="small" data-onstyle="primary"><div class="toggle-group"><label for="" class="btn btn-primary btn-sm toggle-on">Active</label><label for="" class="btn btn-light btn-sm toggle-off">Inactive</label><span class="toggle-handle btn btn-light btn-sm"></span></div></div>
                        </div>
                        <button class="btn_mid btn_green">Copy Embed link</button>
                    </div>
                </div>
            </div>


            <?php if ($i%2!= '0') { ?>

            <?php } ?>
            @endforeach

        </div>

    </div>


</section>

{{ $cemeterys->links('layouts.custom') }}


</div>


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
                url: "{{url('cemeteries/update-feature')}}",
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