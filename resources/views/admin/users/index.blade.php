@extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Users</li>
            </ol>
        </nav>
        
        <div class="row mb-3">
            <div class="col-md-5 col-6">
                <h1 class="mheading">All Users</h1>
            </div>
            <div class="col-md-7 col-6 text-right"><a  href="{{ url('users/create')}}" class="btn_mid btn_green">Add User</a></div>
        </div>


        <div class="row">
            <div class="col-lg-8">
                <ul class="nav nav-tabs same_tabs clearfix" id="userTab" role="tablist">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" id="cemetery-tab" data-toggle="tab" href="#cemetery" role="tab"
                            aria-controls="Cemetery" aria-selected="true">Cemetery User</a> -->
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="public-tab" data-toggle="tab" href="#public" role="tab"
                            aria-controls="Public" aria-selected="false">Public User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="vendor-tab" data-toggle="tab" href="#vendor" role="tab"
                            aria-controls="Vendor" aria-selected="false">Vendor</a>
                    </li> --}}
                </ul>
            </div>
            <div class="col-lg-4">


                <div class="searchbx w-100 mb-2 mt-2 mb-lg-0 mt-lg-0 position-relative">
                    <input type="text" class="form-control" id="" placeholder="Search by username or email">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>

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
                                        
                                        <th>Name</th>
                                        <th>Profile</th>
                                        <th>Email ID</th>
                                        <th>Active</th>
                                        <th>Role</th>
                                        <th>Last access</th>
                                        <th>Subscription</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($users as $user)
                                    <tr>
                                        <td class="text-center">
                                            <div class="mycheck d-inline-block">
                                                <input type="checkbox" id="chkbx2" name="chkbx2">
                                                <label for="chkbx2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>{{ $user->name .' '. $user->lastname }}</td>
                                        <td><img src="{{asset('/uploads').'/'.$user->profile_image}}" width="150" height="200"></td>
                                        <td>{{ $user->email }}</td>
                                        <td>Yes</td>
                                        <td>Admin</td>
                                        <td>12 min 42 sec ago</td>
                                        <td>Business</td>
                                        <td>
                                            <div class="moption">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                <ul class="moptionul">
                                                    <i class="fa fa-caret-up"></i>
                                                    <li><a href="{{ url('users/Edit/'.$user->id)}}">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
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
                        </nav>
                    </div>

                    <div class="tab-pane fade" id="public" role="tabpanel" aria-labelledby="public-tab">
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>


    </section>
@endsection
