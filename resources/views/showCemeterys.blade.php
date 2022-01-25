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
                            <h4 class="title-section float-left">Cemeterys</h4>
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
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>Zip</th>
                                                    <th>Location</th>
                                                    <th>Start Date</th>
                                                    <th>Duration</th>
                                                    <th>Cost</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
//                                                foreach ($events as $key => $value) {
//
                                                ?>
<!--                                                <tr>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td></td>
                                                </tr>-->
                                                <?php
//                                                }
//
                                                ?>

                                                @foreach($cemeterys as $key => $event)
                                                <tr>
                                                    <!--<td>{{$loop->iteration}}</td>-->
                                                    <td>{{$event->id}}</td>
                                                    <td>{{$event->title}}</td>
                                                    <td>{{$event->type}}</td>
                                                    <td>{{$event->zip}}</td>
                                                    <td>{{$event->location}}</td>
                                                    <td>{{$event->startDate}}</td>
                                                    <td>50 min</td>
                                                    <td>$99</td>
                                                    <td style="display: flex;justify-content: space-around;">
                                                        <a class="btn btn-sm btn-facebook" target="_blank" href="{{url('event/'.$event->urlSlug)}}">View</a>
                                                        <a class="btn btn-sm btn-facebook" href="{{url('attendee/create/'.$event->id)}}">Invite</a>
                                                        @can('event_edit')
                                                        <a class="btn btn-sm btn-success" href="{{url('events/'.$event->id.'/edit')}}">Edit</a>
                                                        @endcan
                                                        @can('event_delete')
                                                        <form action="{{ route('events.destroy',$event->id) }}" method="POST">
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
