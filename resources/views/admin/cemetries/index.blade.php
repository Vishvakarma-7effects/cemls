
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
		<h1 class="mheading">Cemeteries</h1>
</div>
	<div class="col-md-7 col-6 text-right"><a class="btn_mid btn_green" href="{{ url('cemeterys/create')}}">Add Cemetry</a>
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
							<td width="" style="padding: 15px;">
								<div class="plothead">{{$cemVal->cemetery_name}}</div>
								<div class="plotshead">
									{{$cemVal->address.',' .$cemVal->city.','.$cemVal->state}}
								</div>
							</td>
						<td width="350" style="padding: 15px;">
								<div class="thead">Actions</div>
							<div class="d-flex">
								<a class="btn_mid btn_cms_list mr-3" href="{{ url('cemeterys/getInvitePeople') }}">Manage Members</a>
																																										
								<a class="btn_mid btn_cms_list"	href="{{ url('cemeterys/getAddMember') }}">Add Members</a>
										
							</div>
						</td>

						<td width="40" align="right" style="padding: 15px;">
							<div class="moption  mt-4">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
									<ul class="moptionul">
										<i class="fa fa-caret-up"></i>
										<li><a href="{{ url('cemeterys/'.$cemVal->ID.'/edit')}}">Edit</a></li>
													<!-- <li><a href="#">Delete</a></li> -->
													<li>
                                        <form action="{{ route('cemeterys.destroy',$cemVal->ID) }}" method="POST">
   
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

		<nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
			<ul class="pagination justify-content-end">
				<li class="page-item">
				<a class="page-link pn_arrow" href="#" aria-label="Previous">
						<i class="fa fa-caret-left"></i>
				</a>
			</li>
			{{-- <li class="page-item">
																
						{!! $cemeterys->links('pagination::bootstrap-4') !!}
				</li> --}}

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
						</nav>


						</div>


		</div>
</div>


</div>



</section>
@endsection
<script>
	function myFunction()
	{
		if(!confirm("Are you sure to delete this?"))
		event.preventDefault();
	}
</script>