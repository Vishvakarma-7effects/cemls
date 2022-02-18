
@extends('layouts.admin')

@section('content')

<section class="panelrht">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Property</a></li>
		<li class="breadcrumb-item active" aria-current="page">Cemeteries</li>
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
	<div class="col-md-7 col-6 text-right"><a class="btn_mid btn_green" href="{{ url('cemeteries/create')}}">Add Cemetry</a>
	</div>
</div>
<br>
 <div class="row">
        <div class="col-lg-2 col-12">
            <h1 class="mheading">Cemeteries</h1>
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
            	                <form action="{{ route('cemeteries.index') }}" method="GET" role="search">

                <input type="text" class="form-control"  name="term" id="" placeholder="Cemetery Name or ID">
                <a href="#"><i class="fa fa-search"></i></a>
                                </form>

            </div>

            
        </div>
    </div>
<div id="switchTabContent" class="tab-content">
<div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
		<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">
								<section class="bxshadow mb-3 mb-md-5">

							@foreach ($cemeterys as $cemKey => $cemVal)
																		
							<div class="cntbox">
				<table class="table mb-0 plot_table">
					<tr class="" style="">
								<td width="76" style="padding: 15px;">
									<img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
								</td>
							<td width="" style="padding: 3px;">
								<div class="plothead">{{$cemVal->cemetery_name}}</div>
								<div class="plotshead">
									{{$cemVal->address.',' .$cemVal->city.','.$cemVal->state}}
								</div>
							</td>

						<td width="500px" style="padding: 15px;">
								<div class="thead">Actions</div>
							<div class="d-flex">
								    <input data-id="{{$cemVal->ID}}" class="radio" type="checkbox" data-toggle="toggle" data-on="Yes" {{ $cemVal->feature == 1 ? 'checked' : '' }} data-off="No"  data-size="small" data-onstyle="primary"> &nbsp;&nbsp;
								<a class="btn_mid btn_cms_list mr-3" href="{{ url('users') }}">Manage Members</a>
																																										
								<a class="btn_mid btn_cms_list"	href="{{ url('cemetery/getInvitePeople') }}">Add Members</a>
										
							</div>
						</td>

						<td width="40" align="right" style="padding: 15px;">
							<div class="moption  mt-4">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									<ul class="moptionul">
										<i class="fa fa-caret-up"></i>
										<li><a href="{{ url('cemeteries/'.$cemVal->ID.'/edit')}}">Edit</a></li>
													<!-- <li><a href="#">Delete</a></li> -->
													<li>
                                        <form action="{{ route('cemeteries.destroy',$cemVal->ID) }}" method="POST">
   
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
																		
										
				{{-- <div class="d-flex justify-content-center">
						{!! $cemeterys->links('pagination::bootstrap-4') !!}
					</div>  --}}
    

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