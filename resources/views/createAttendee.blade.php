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
                <form action="{{ route('attendee.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card box">
                        <div class="card-body">
                            <header class="section-heading mb-3">
                                <h4 class="title-section float-left">Add Attendee</h4>
                                <div class="clearfix"></div>
                            </header>
                            @include('layouts.flashMessge')
                            <div class="row mb-3 pl-2 pr-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Choose Event</label>
                                        <select name="event_id" required="required" class="form-control">
                                            <option>Select Event</option>
                                            @foreach($events as $event)
                                            <option {{ $event->id == $event_id ? 'selected' : '' }} value="{{$event->id}}">{{$event->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="attendee_append">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="required">Attendee Name</label>
                                                    <input type="text" name="name[]" required="required" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Attendee Email</label>
                                                    <input type="email" name="email[]" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Attendee Phone</label>
                                                    <input type="text" name="phone[]" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="newRow">

                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <div class="form-group">
                                        <a id="addRow" class="btn btn-sm btn-facebook">Add Form</a>
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
@section('scripts')
<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '' +
                '<div class="attendee_append">' +
                '                                        <div class="row">' +
                '                                            <div class="col-12">' +
                '                                                <div class="form-group">' +
                '                                                    <label class="required">Attendee Name</label>' +
                '                                                    <input type="text" name="name[]" required="required" class="form-control"/>' +
                '                                                </div>' +
                '                                            </div>' +
                '                                            <div class="col-12">' +
                '                                                <div class="form-group">' +
                '                                                    <label>Attendee Email</label>' +
                '                                                    <input type="email" name="email[]" class="form-control"/>' +
                '                                                </div>' +
                '                                            </div>' +
                '                                            <div class="col-12">' +
                '                                                <div class="form-group">' +
                '                                                    <label>Attendee Phone</label>' +
                '                                                    <input type="text" name="phone[]" class="form-control"/>' +
                '                                                </div>' +
                '                                            </div>' +
                '                                            <div class="col-12 text-right">' +
                '                                                <div class="form-group">' +
                '                                                    <a class="btn btn-sm btn-danger remove">Remove</a>' +
                '                                                </div>' +
                '                                            </div>' +
                '                                        </div>' +
                '                                    </div>' +
                '';
        $('#newRow').append(html);
    });

    // remove row
    $('body').on('click', '.remove', function () {
        $(this).closest('.attendee_append').remove();
    });
</script>
@endsection
