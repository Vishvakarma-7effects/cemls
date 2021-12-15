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
                            <h4 class="title-section float-left">Cemetery</h4>
                            <div class="clearfix"></div>
                        </header>
                        <div class="row mb-3 pl-2 pr-2">
                            <div class="col-12">
                                <div class="card">
                                    @include('layouts.flashMessge')
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter" id="example">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                   <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               

                                                @foreach($cemeterys as $key => $cemetery)
                                                <tr>
                                                    <!--<td>{{$loop->iteration}}</td>-->
                                                    <td>{{$cemetery->ID }}</td>
                                                    <td>{{$cemetery->cemetery_name}}</td>
                                                     <td>{{$cemetery->email}}</td>
													 <td style="display: flex;justify-content: space-around;">
                                                @can('page_edit')
                                                <a class="btn btn-sm btn-success" href="{{url('cemeterys/'.$cemetery->ID .'/edit')}}">Edit</a>
                                                @endcan
                                                @can('page_delete')
                                                <form action="{{ route('cemeterys.destroy',$cemetery->ID ) }}" method="POST">

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
