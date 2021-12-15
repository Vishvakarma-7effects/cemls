@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">User</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 mt-4 mt-lg-0">

                <div class="box shadow-none bg-gray mb-4">
                    <div class="row">
                        <div class="col-12">
                            @include('layouts.flashMessge')
                        </div>
                        <div class="col-sm-12 col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                            <span class="center-lg-y text-muted">{{count($users)}} result(s) found</span>
                        </div>

                        <div class="col-sm-12 col-lg-6 text-center text-lg-right">
                            <a href="{{url('user/create')}}" class="btn btn-primary ml-3" data-toggle="tooltip" title="Add a new user"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>Role</th>
                                            <th class="text-center"><i class="fas fa-cog"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        @php
                                        $user_role = json_decode($user->roles->pluck('name'));
                                        $user_role_name= ucfirst($user_role[0]);
                                        @endphp
                                        <tr>
                                            <!--<td>{{$loop->iteration}}</td>-->
                                            <td>{{$user->id}}</td>
                                            <td>{{ucfirst($user->name)}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user_role_name}}</td>
                                            <td style="display: flex;justify-content: space-around;">
                                                <a class="btn btn-sm btn-success" href="{{url('user/'.$user->id.'/edit')}}">Edit</a>

                                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
