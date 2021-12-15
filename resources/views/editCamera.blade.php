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
                <form action="{{ route('camera.update',$camera->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card box">
                        <div class="card-body">
                            <header class="section-heading mb-3">
                                <h4 class="title-section float-left">Edit Camera</h4>
                                <div class="clearfix"></div>
                            </header>
                            @include('layouts.flashMessge')
                            <div class="row mb-3 pl-2 pr-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Camera Name</label>
                                        <input type="text" name="name"  value="{{$camera->name}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Camera Model No.</label>
                                        <input type="text" name="modelNo" value="{{$camera->modelNo}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Camera Wowza Id</label>
                                        <input type="text" name="camera_wowza_id" value="{{$camera->camera_wowza_id}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Camera Live URL</label>
                                        <input type="text" name="liveUrl" value="{{$camera->liveUrl}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="required">Latitude</label>
                                        <input type="text" name="lat" value="{{$camera->lat}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="required">Longitude</label>
                                        <input type="text" name="long" value="{{$camera->long}}" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn">Save</button>
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
