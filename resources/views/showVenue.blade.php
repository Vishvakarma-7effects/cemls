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
                            <h4 class="title-section float-left">Venues</h4>
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
                                                    <th>Venue Name</th>
                                                    <th>Organizer Name</th>
                                                    <th>Camera</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($venues as $key => $venue)
                                                <tr>
                                                    <!--<td>{{$loop->iteration}}</td>-->
                                                    <td>{{$venue->id}}</td>
                                                    <td>{{$venue->name}}</td>
                                                    <td>{{$venue->organizer}}</td>
                                                    <td>{{ !empty($venue->camera) ? $venue->camera : 'Not Assigned' }}</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        @can('venue_edit')
                                                        @hasrole('organizer')
                                                        @if (!empty($venue->camera))
                                                        <a class="btn btn-sm btn-success" href="{{url('venues/'.$venue->id.'/edit')}}">Edit</a>
                                                        @else
                                                        @endif
                                                        @else
                                                        <a class="btn btn-sm btn-success" href="{{url('venues/'.$venue->id.'/edit')}}">Edit</a>
                                                        @endhasrole
                                                        @endcan
                                                        <!--                                                        @can('venue_delete')
                                                                                                                <form action="{{ route('venues.destroy',$venue->id) }}" method="POST">
                                                                                                                    @csrf
                                                                                                                    @method('DELETE')
                                                                                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                                                                </form>
                                                                                                                @endcan-->
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
