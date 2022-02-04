@extends('layouts.main')
@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
		<div class="card">
			<!--begin::Card header-->
			<div class="card-header">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bolder text-dark">Edit Role</span>
				</h3>
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body">
				<!--begin::Calendar-->
				<div id="">
					<form action="{{url('updaterole')}}" method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$data->id}}">
												
										      
                                              <div class="row">
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="">
                                                      </div>
                                                    </div>
                                
                                                    <!-- <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <label>Guard Name </label>
                                                        <input type="text" name="guard_name" class="form-control" placeholder="Enter Guard Name" value="">
                                                      </div>
                                                    </div> -->
                                              </div>
                                            <br>
                       

					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Update</button>
					</div> 
                    </form>
                </div>
			</div>
		</div>
		
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->

@endsection