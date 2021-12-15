@extends('layouts.main')

@section('content')
<section class="section-pagetop bg-gray">
    <div class="container clearfix">
        <h4 class="title-page dark b float-xl-left mb-0">Dashboard</h4>
        <nav class="float-xl-right mt-2 mt-xl-0">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="#" class="dark"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section-content padding-y bg-white">
    <div class="container">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-lg-9 mt-4 mt-lg-0">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="card box">
                        <div class="card-body">
                            <header class="section-heading mb-3">
                                <h4 class="title-section float-left">Register User</h4>
                                <div class="clearfix"></div>
                            </header>
                            @include('layouts.flashMessge')
                            <div class="row mb-3 pl-2 pr-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">User Name</label>
                                        <input type="text" name="name" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">User Email</label>
                                        <input type="email" name="email" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="number" name="phone" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Password</label>
                                        <input type="password" name="password" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Confirm Password</label>
                                        <input type="password" name="password_confirmation" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Choose Role</label>
                                        <select name="role" required="required" class="form-control">
                                            <option>Select Role</option>
                                            @foreach($roles as $key => $role)
                                            <option value="{{$role->id}}">{{ucfirst($role->name)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
