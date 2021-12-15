@extends('layouts.mainFront')
@section('content')
<!-- main content -->
<div role="main" class="main">
    <section class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h1>{{$page->title}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div id="content" class="content full">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>

                <div class="col-md-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection