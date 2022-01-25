    @extends('layouts.admin')

    @section('content')
    {{-- {{dd($user)}} --}}
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Role</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <h1 class="mheading">Edit</h1>
       <section class="bxshadow">
            <div class="cntbox">
                <div class="form-group row">
                    <label for="inputtext" class="col-sm-2 col-form-label">  Role Name</label>
                    <div class="col-sm-4 ">
                      <input type="text" class="form-control" id="inputtext" placeholder="Cashier Name" required="">
                    </div>
                </div>
            </div>


            <div class="cntbox">
                <h2 class="sheading">Permission</h2>

                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="nk-block-actions d-flex justify-content-between border-bottom">
                            <label for="title1" class="role-sheading ">Title 1</label>
                            <div class="custom-control custom-switch mr-n2 " >
                                <input  type="checkbox" class="custom-control-input ng-valid ng-empty ng-dirty ng-valid-parse ng-touched" id="first" >
                                <label class="custom-control-label" for="first"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 col-md-11 mt-3">
                                <label for="defaultCheck" class="col-form-label">Default checkbox</label>
                            </div>
                            <div class="col-2 col-md-1 mt-3 text-center">
                                <input type="checkbox" id="defaultCheck" name="example2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 col-md-11 mt-3">
                                <label for="defaultCheck" class="col-form-label">Default checkbox</label>
                            </div>
                            <div class="col-2 col-md-1 mt-3 text-center">
                                <input type="checkbox" id="defaultCheck" name="example2">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="nk-block-actions d-flex justify-content-between border-bottom ">
                            <label for="title2" class="role-sheading" class="col-form-label">Title 2</label>

                            <div class="custom-control custom-switch mr-n2 ">
                                <input type="checkbox"  class="custom-control-input ng-valid ng-empty ng-dirty ng-valid-parse ng-touched" id="second" >
                                <label class="custom-control-label" for="second"></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 col-md-11  mt-3">
                                <label for="defaultCheck" class="col-form-label">Default checkbox</label>
                            </div>
                            <div class="col-2 col-md-1  mt-3 text-center">
                                <input type="checkbox" id="defaultCheck" name="example2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 col-md-11  mt-3 text-center">
                                <label for="defaultCheck" class="col-form-label">Default checkbox</label>
                            </div>
                            <div class="col-2 col-md-1  mt-3 text-center">
                                <input type="checkbox" id="defaultCheck" name="example2">
                            </div>
                        </div>
                    </div>

                </div>






            </div>

            <div class="cntbox">
                <button class="btn_mid btn_green">Update</button>
            </div>
        </section>


 34m 21s



    </section>


    @endsection
