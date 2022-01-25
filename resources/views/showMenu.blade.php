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
                            <span class="center-lg-y text-muted">{{count($menus)}} result(s) found</span>
                        </div>

                        <div class="col-sm-12 col-lg-6 text-center text-lg-right">
                            <a href="{{url('menus/create')}}" class="btn btn-primary ml-3" data-toggle="tooltip" title="Add a new page"><i class="fas fa-plus"></i></a>
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
                                            <th>Menu</th>
                                            <th>URL</th>
                                            <th>Menu Order</th>
                                            <th>Home</th>
                                            <th>Footer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($menus as $key => $menu)
                                        @if ($menu->onFooter == 0)

                                        @php
                                        $onFooter = 'no'
                                        @endphp

                                        @else

                                        @php
                                        $onFooter = 'Menu '.$menu->onFooter
                                        @endphp

                                        @endif
                                        <tr>
                                            <!--<td>{{$loop->iteration}}</td>-->
                                            <td>{{$menu->id}}</td>
                                            <td>{{$menu->menuName}}</td>
                                            <td><a href="{{$menu->customLink == '' ? 'No Custom Link' : $menu->customLink}}" target="_blank">{{$menu->customLink == '' ? 'No Custom Link' : $menu->customLink}}</a></td>
                                            <td>{{$menu->rank_order}}</td>
                                            <td>{{$menu->onHome}}</td>
                                            <td>{{$onFooter}}</td>
                                            <td style="display: flex;justify-content: space-around;">
                                                @can('menu_edit')
                                                <a class="btn btn-sm btn-success" href="{{url('menus/'.$menu->id.'/edit')}}">Edit</a>
                                                @endcan
                                                @can('menu_delete')
                                                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">

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
</section>
@endsection
