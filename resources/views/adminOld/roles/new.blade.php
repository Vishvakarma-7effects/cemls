@extends('layouts.admin')

@section('content')
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Roles</li>
            </ol>
        </nav>
        <h1 class="mheading">Add Roles</h1>
        <section class="bxshadow">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="post" action="{{ route('roles.store')}}" accept-charset="UTF-8">
            @csrf
            <div class="cntbox">
            
                <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                            <input type="text" name="name" class="form-control" id="" value="{{old('name')}}">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Guard Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                        <input type="text" name="guard_name" class="form-control" id="" value="{{old('guard_name')}}">
                        </div>
                        </div>

                    </div>

                    
                </div>
            
            </div>
            

            <div class="cntbox">
                <button class="btn_mid btn_green" type="submit">Add</button>
                <button class="btn_mid btn_none ml-3">Cancel</button>
            </div>
            </form>
        </section>

    </section>

@endsection
