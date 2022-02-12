@extends('layouts.admin')
@section('content')

	<section class="panelrht mt-5">

		{{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Invite People</li>
            </ol>
        </nav> --}}

		<div class="row">
			<div class="col-md-5 col-6">
				<h1 class="mheading">Invite User</h1>
			</div>
		</div>

		<section class="bxshadow">
			<div class="cntbox">
				<div class="row">
					<div class="col-lg-9 pr-lg-0">
						<div class="form-group row">
							<label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Email id</label>
							<div class="col-lg-7 col-sm-9">
								<input type="email" class="form-control" id="" placeholder="">
							</div>
						</div>

						{{-- <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Role</label>
                        <div class="col-lg-7 col-sm-9 d-flex justify-content-between">

                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label col-form-label" for="inlineCheckbox1">Role1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label col-form-label" for="inlineCheckbox2">Role2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label col-form-label" for="inlineCheckbox3">Role3</label>
                            </div>
                        </div>
                    </div> --}}




						<div class="form-group row">
							<label for="" class="col-lg-3 col-sm-3 col-form-label pr-0 ">Message</label>
							<div class="col-lg-7 col-sm-9">
								<textarea class="form-control" rows="4" cols="50"></textarea>

							</div>
						</div>

						<div class="form-group row">
							<label for="" class="col-lg-3 col-sm-3 col-form-label"></label>
							<div class="col-lg-7 col-sm-9">

								<button class="btn_mid btn_green">invite</button>
								<button class="btn_mid btn_none ml-3">Cancel</button>
							</div>
						</div>

					</div>


				</div>


			</div>


		</section>

	</section>
@endsection
