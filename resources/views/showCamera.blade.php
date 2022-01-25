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
                <div class="card box">
                    <div class="card-body">
                        <header class="section-heading mb-3">
                            <h4 class="title-section float-left">Events</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    @include('layouts.flashMessge')
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Model No.</th>
                                                    <th>Camera Live Url</th>
                                                    <th>Latitude</th>
                                                    <th>Longitude</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cameras as $key => $camera)
                                                <tr>
                                                    <td>{{$camera->id}}</td>
                                                    <td>{{$camera->name}}</td>
                                                    <td>{{$camera->modelNo}}</td>
                                                    <td>{{$camera->liveUrl}}</td>
                                                    <td>{{$camera->lat}}</td>
                                                    <td>{{$camera->long}}</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        @can('event_edit')
                                                        <a class="btn btn-sm btn-success" href="{{url('camera/'.$camera->id.'/edit')}}">Edit</a>
                                                        @endcan
                                                        @can('event_delete')
                                                        <form action="{{ route('camera.destroy',$camera->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                                        @endcan
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
        </div>
    </div>
</section>

@endsection
