@extends('layouts.admin')

@section('content')
	<section class="panelrht">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Admin</a></li>
				<li class="breadcrumb-item active" aria-current="page">All Users</li>
			</ol>
		</nav>
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
		<div class="row mb-3">
			<div class="col-md-5 col-6">
				<h1 class="mheading">All Users</h1>
			</div>
			@can('user_add')
			<div class="col-md-7 col-6 text-right"><a href="{{ url('users/create') }}" class="btn_mid btn_green">Add User</a>
			</div>
			@endcan
		</div>


		<div class="row">
			<div class="col-lg-8">
				<ul class="nav nav-tabs same_tabs clearfix" id="userTab" role="tablist">

					<li class="nav-item">
						<a class="nav-link" onclick="window.location='{{ url('users')}}'"  id="public-tab"  data-toggle="tab" href="{{ route('users.index') }}" role="tab"
							aria-controls="Public" aria-selected="true">All User</a>
					</li>
					@if (isset($_GET['cemetery_id']) && !empty($_GET['cemetery_id']))
						<li class="nav-item">
							<a class="nav-link active" id="cemetery-tab" data-toggle="tab" href="#cemetery" role="tab"
								aria-controls="Cemetery" aria-selected="true">{{ ucwords($cemeteryDetail->cemetery_name) }} User</a>
						</li>
					@endif

					<!--<li class="nav-item">-->
					<!--    <a class="nav-link" id="vendor-tab" data-toggle="tab" href="#vendor" role="tab"-->
					<!--        aria-controls="Vendor" aria-selected="false">Vendor</a>-->
					<!--</li>-->
				</ul>
			</div>
			<div class="col-lg-4">

				<form action="{{ route('users.index') }}" method="GET" role="search">

					<div class="searchbx w-100 mb-2 mt-2 mb-lg-0 mt-lg-0 position-relative">
						<input type="text" class="form-control" name="term" id="" placeholder="Search by name,email or cemetery">

						<a href="#"><i class="fa fa-search"></i></a>
					</div>
				</form>

			</div>
		</div>

		<div id="userTabContent" class="tab-content">
			<div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade show active" id="cemetery" role="tabpanel" aria-labelledby="cemetery-tab">
						<div class="mb-5 bxshadow">
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
										<th>Name</th>
										<th>Email ID</th>

										<th>Role</th>
										<th>Member Since</th>
										<!--<th>Subscription</th>-->
										<th>Active</th>
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

									@foreach ($users as $user)
										<tr>
											<td class="text-center">
												<div class="mycheck d-inline-block">
													<input type="checkbox" id="chkbx2" name="chkbx2">
													<label for="chkbx2">&nbsp;</label>
												</div>
											</td>
											<td>{{ $user->name }}</td>

											<td>{{ $user->email }}</td>

											<td> <?php

												$rolename = getuserrolename($user->userrole);

												if (!empty($rolename[0]->name)) {
																echo $rolename[0]->name;
												} ?>
											</td>
											<td>{{ $user->created_at }}</td>
											<!--<td>Business</td>-->
											<td width="150px">
												<input data-id="{{ $user->id }}" class="radio" type="checkbox" data-toggle="toggle"
													data-on="Yes" {{ $user->feature == 1 ? 'checked' : '' }} data-off="No" data-size="small"
													data-onstyle="primary">
											</td>
											<td>
												<div class="moption">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
													<ul class="moptionul">
														<i class="fa fa-caret-up"></i>
										@can('user_cemetery_list')			
										<li class="cemeteryListModal" userId="{{ $user->id }}"> <a href="javascript:void(0)">Cemeteries </a></li>
										
										@endcan
										@can('user_edit')
							    			<li><a href="{{ url('users/Edit/' . $user->id) }}">Edit</a></li>
									    @endcan
									    
									    @can('user_delete')
											<li><a href="#">Delete</a></li>
										@endcan
											</ul>
												</div>
											</td>
										</tr>
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



					<div class="tab-pane fade show" id="public" role="tabpanel" aria-labelledby="cemetery-tab">
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
										<th>Name</th>
										<th>Email ID</th>
										<th>Active</th>
										<th>Role</th>
										<th>Member Since</th>

										<th>Action</th>
										{{-- <th width="40">
											<div class="moption">
												<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												<ul class="moptionul">
													<i class="fa fa-caret-up"></i>
													@can('user_edit')
													<li><a href="{{ url('users/Edit/' . $user->id) }}">Edit</a></li>
													<li>
													@endcan
														<form action="{{ route('users.destroy', $user->id) }}" method="POST">
															<input type="hidden" name="_method" value="DELETE">
															<input type="hidden" name="_token" value="{{ csrf_token() }}">
															<button class="btn btn-outline-dark role-edit" onclick="return myFunction();">Delete</button>
														</form>
													</li>
												</ul>
											</div>
										</th> --}}
									</tr>
								</thead>
								<tbody>
									@if (count($users) > 0)
										{{-- {{ dd($user->role->name)}} --}}
										@foreach ($users as $user)
											<tr>
												<td class="text-center">
													<div class="mycheck d-inline-block">
														<input type="checkbox" id="chkbx2" name="chkbx2">
														<label for="chkbx2">&nbsp;</label>
													</div>
												</td>
												<td>{{ $user->name }}</td>

												<td>{{ $user->email }}</td>
												<td>Yes</td>
												<td> {{ $user->role->name ?? '-' }}</td>
												<td>{{ $user->created_at }}</td>

												<td width="150px">
													<input data-id="{{ $user->id }}" class="radio" type="checkbox" data-toggle="toggle"
														data-on="Yes" {{ $user->feature == 1 ? 'checked' : '' }} data-off="No" data-size="small"
														data-onstyle="primary">
												</td>
												<td>
													<div class="moption">
														<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
														<ul class="moptionul">

															<i class="fa fa-caret-up"></i>
										@can('user_cemetery_list')
                                        <li class="cemeteryListModal" userId="{{ $user->id }}"> <a href="javascript:void(0)">Cemeteries </a></li>
                                        @endcan
                                        
								    	@can('user_edit')
															<li><a href="{{ url('users/Edit/' . $user->id) }}">Edit</a></li>
															@endcan
															
															@can('user_delete')
															<li>
																<form action="{{ route('users.destroy', $user->id) }}" method="POST">
																	<input type="hidden" name="_method" value="DELETE">
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<button class="btn btn-outline-dark role-edit"
																		onclick="return confirm('Are you sure you want to delete?')">Delete</button>
																</form>
															</li>
															@endcan
														</ul>
													</div>
												</td>
											</tr>
										@endforeach
									@else
										Any User Not Found.
									@endif

								</tbody>
							</table>
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
