@extends('layouts.admin')

@section('content')
	<section class="panelrht">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Locations</a></li>
				<li class="breadcrumb-item active" aria-current="page">All Locations</li>
			</ol>
		</nav>
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
		<div class="row mb-3">
			<div class="col-md-5 col-6">
				<h1 class="mheading">All Locations</h1>
			</div>
			<div class="col-md-7 col-6 text-right"><a href="{{ url('location/create') }}" class="btn_mid btn_green">Add Location</a>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-8">
				<ul class="nav nav-tabs same_tabs clearfix" id="userTab" role="tablist">

					<li class="nav-item">
						<a class="nav-link" id="public-tab" data-toggle="tab" href="{{ url('location') }}" role="tab"
							aria-controls="Public" aria-selected="true">All Locations</a>
					</li>
					

					<!--<li class="nav-item">-->
					<!--    <a class="nav-link" id="vendor-tab" data-toggle="tab" href="#vendor" role="tab"-->
					<!--        aria-controls="Vendor" aria-selected="false">Vendor</a>-->
					<!--</li>-->
				</ul>
			</div>
			<div class="col-lg-4">

				<form action="{{ route('location.index') }}" method="GET" role="search">

					<div class="searchbx w-100 mb-2 mt-2 mb-lg-0 mt-lg-0 position-relative">
						<input type="text" class="form-control" name="term" id="" placeholder="Search by location title">

						<a href="#"><i class="fa fa-search"></i></a>
					</div>
				</form>

			</div>
		</div>

		<div id="userTabContent" class="tab-content">
			<div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade show active" id="cemetery" role="tabpanel" aria-labelledby="cemetery-tab">
						<div class="table-responsive mb-5 bxshadow">
							<table class="table  main_table mb-0">
								<thead>
									<tr>
										<th width="60" class="text-center">
											<div class="mycheck d-inline-block">
												<input type="checkbox" id="chkbx1" name="chkbx1">
												<label for="chkbx1">&nbsp;</label>
											</div>
										</th>
										{{-- <th>Username</th> --}}
										<th>Id</th>
										<th>Location Title</th>

										
										
										<th width="40">
											<!--<div class="moption">-->
											<!--    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>-->
											<!--    <ul class="moptionul">-->
											<!--        <i class="fa fa-caret-up"></i>-->
											<!--        <li><a href="{{ url('users/getEdit') }}">Edit</a></li>-->
											<!--        <li><a href="#">Delete</a></li>-->
											<!--    </ul>-->
											<!--</div>-->
										</th>
									</tr>
								</thead>
								<tbody>
									@php $count=1; @endphp
									@foreach ($list as $listing)
										<tr>
											<td class="text-center">
												<div class="mycheck d-inline-block">
													<input type="checkbox" id="chkbx2" name="chkbx2">
													<label for="chkbx2">&nbsp;</label>
												</div>
											</td>
											<td>{{ $count }}</td>
											<td>{{ $listing->location_title }}</td>

											
											
											
											<td>
												<div class="moption">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
													<ul class="moptionul">
														<i class="fa fa-caret-up"></i>
														

														<li><a href="{{ url('location/edit/' . $listing->id) }}">Edit</a></li>
														<li><a href="{{ url('location/delete/' . $listing->id) }}" onclick="confirm('Want to delete location?');">Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										@php $count++; @endphp
									@endforeach

								</tbody>
							</table>
							<div class="modalOuter">


							</div>

						</div>

						<!--<nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
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
					</div>



					



						<!-- <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
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
					</div>

				</div>
			</div>

			<div class="tab-pane fade pb-4" id="switchtwo" role="tabpanel" aria-labelledby="switchtwo-tab">
				<div class="mframe">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin"
						width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>


	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

	<script>

	 $('.cemeteryListModal').click(function() {
	  // debugger
	  var user_id = $(this).attr('userId');
	  let url = "{!! route('user.getCemeteryList') !!}"
	  // AJAX request
	  $.ajax({
	   url: url,
	   type: 'post',
	   data: {
	    '_token': '{{ csrf_token() }}',
	    user_id: user_id
	   },
	   success: function(response) {
	    // debugger;
	    if (response) {
	     // $('.modalOuter').
	     $('.modalOuter').empty()
	     $('.modalOuter').html(response.view);
	  			$('#cemeteryListModal').modal('toggle');
	    }
	    // Add response in Modal body
	    // $('.cemeteryListModal').html(response);
	   }
	  });
	 })

	 $(document).ready(function() {
	  $(".radio").change(function() {
	   var event_id = $(this).data("id");

	   var selected_value = 0;
	   if ($(this).is(":checked")) {
	    selected_value = 1;
	   }



	   $.ajax({
	    type: "POST",
	    url: "{{ url('users/update-feature') }}",
	    data: {
	     '_token': '{{ csrf_token() }}',
	     'event_id': event_id,
	     'value': selected_value
	    },
	    dataType: "json",
	    beforeSend: function() {
	     $('#ajax_loader').show();
	    },
	    success: function(data) {
	     console.log(data);
	    },
	    complete: function() {
	     $('#ajax_loader').hide();
	    }
	   });
	  });
	 });
	</script>
@endsection
