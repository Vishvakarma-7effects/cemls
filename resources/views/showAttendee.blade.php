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
                            <h4 class="title-section float-left">Attendees</h4>
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
                                                    <th>Event Name</th>
                                                    <th>Attendee Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                ?>
                                                @foreach($attendies as $key => $attendee)
                                                <?php
                                                if ($attendee->rowspanValue == 1 && $attendee->rowspanStatus == 1) {
                                                    ?>
                                                    <tr>
                                                        <td>{{$attendee->attendee_info}}</td>
    <!--                                                        <td style="display: flex;justify-content: space-around;">
                                                            @can('event_edit')
                                                            <a class="btn btn-sm btn-success" href="{{url('attendee/'.$attendee->id.'/edit')}}">Edit</a>
                                                            @endcan
                                                            @can('event_delete')
                                                                                                                        <form action="{{ route('attendee.destroy',$attendee->id) }}" method="POST">
                                                                                                                            @csrf
                                                                                                                            @method('DELETE')
                                                                                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                                                                        </form>
                                                            @endcan
                                                        </td>-->
                                                    </tr>
                                                    <?php
                                                } else {
                                                    $i += 1;
                                                    ?>
                                                    <tr>
                                                        <td rowspan="{{ $attendee->rowspanValue }}">{{$attendee->event}} ({{$attendee->event_id}})</td>
                                                        <td>{{$attendee->attendee_info}}</td>
    <!--                                                        <td style="display: flex;justify-content: space-around;">
                                                            @can('event_edit')
                                                            <a class="btn btn-sm btn-success" href="{{url('attendee/'.$attendee->id.'/edit')}}">Edit</a>
                                                            @endcan
                                                            @can('event_delete')
                                                                                                                        <form action="{{ route('attendee.destroy',$attendee->id) }}" method="POST">
                                                                                                                            @csrf
                                                                                                                            @method('DELETE')
                                                                                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                                                                                        </form>
                                                            @endcan
                                                        </td>-->
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
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
