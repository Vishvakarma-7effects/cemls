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

                <div class="box shadow-none bg-gray mb-4">
                    <div class="row">
                        <div class="col-12">
                            @include('layouts.flashMessge')
                        </div>
                        <div class="col-sm-12 col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                            <span class="center-lg-y text-muted">{{count($categories)}} result(s) found</span>
                        </div>

                        <div class="col-sm-12 col-lg-6 text-center text-lg-right">
                            <a href="{{url('categories/create')}}" class="btn btn-primary ml-3" data-toggle="tooltip" title="Add a Category"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $key => $category)
                                        <tr>
                                            <!--<td>{{$loop->iteration}}</td>-->
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td style="display: flex;">
                                                @can('menu_edit')
                                                <a class="btn btn-sm btn-success" href="{{url('categories/'.$category->id.'/edit')}}">Edit</a>
                                                @endcan
                                                @can('menu_delete')
                                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 10px;">Delete</button>
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
</section>
@endsection
