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
                <form action="{{ route('menus.store') }}" method="post">
                    @csrf
                    <div class="card box">
                        <div class="card-body">
                            <header class="section-heading mb-3">
                                <h4 class="title-section float-left">Add Menu</h4>
                                <div class="clearfix"></div>
                            </header>
                            @include('layouts.flashMessge')
                            <div class="row mb-3 pl-2 pr-2">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="required">Menu Name</label>
                                        <input type="text" name="menuName" required="required" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Select Existing page</label>
                                        <select name="linkedPage" id="menu" class="form-control">
                                            <option value="0">Select Page to Link</option>
                                            @foreach($pages as $key => $page)
                                            <option data-url="{{$page->urlSlug}}" value="{{$page->id}}">{{$page->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>URL</label>
                                        <input id="customLink" type="text" name="customLink" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Menu Order</label>
                                        <input type="number" name="rank_order" value="0" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="required">Show on Header</label>
                                        <br>
                                        <div class="form-control radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onHome" id="inlineRadio1" value="yes">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onHome" id="inlineRadio2" value="no" checked="">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="required">Show on Footer</label>
                                        <br>
                                        <div class="form-control radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onFooter" id="inlineRadio3" value="1">
                                                <label class="form-check-label" for="inlineRadio3">Menu 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onFooter" id="inlineRadio4" value="2">
                                                <label class="form-check-label" for="inlineRadio4">Menu 2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onFooter" id="inlineRadio4" value="3">
                                                <label class="form-check-label" for="inlineRadio4">Menu 3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="onFooter" id="inlineRadio4" value="0" checked="">
                                                <label class="form-check-label" for="inlineRadio4">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="required">Open in new tab</label>
                                        <br>
                                        <div class="form-control radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="newTab" id="inlineRadio7" value="1">
                                                <label class="form-check-label" for="inlineRadio7">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="newTab" id="inlineRadio8" value="0" checked>
                                                <label class="form-check-label" for="inlineRadio8">No</label>
                                            </div>
                                        </div>
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
    $(document).ready(function () {
        var base_url = "{{url('page')}}";
        $("#menu").change(function () {
            var url = $(this).find(':selected').data('url')

            $('#customLink').val(base_url + '/' + url);
        });
    });
</script>
@endsection
