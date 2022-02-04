@extends('layouts.admin')

@section('content')

<section class="panelrht">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cemeteries</li>
        </ol>
    </nav>
    

    <div class="row">
        <div class="col-md-5 col-6">
            <h1 class="mheading">Cemeteries</h1>
        </div>
        <div class="col-md-7 col-6 text-right"><a class="btn_mid btn_green" href="{{ url('cemeterys/create')}}">Add Cemetry</a>
        </div>
    </div>


    <div id="switchTabContent" class="tab-content">
        <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">
                    <section class="bxshadow mb-3 mb-md-5">

                            @foreach ($cemeterys as $cemKey => $cemVal)
                                {{-- {{ dd($cemVal)}} --}}
<<<<<<< HEAD
                                <tr class="border-bottom" style="">
                                    <td width="76" style="padding: 15px;">
                                        <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                    </td>
                                    <td width="" style="padding: 15px;">
                                        <div class="plothead">{{$cemVal->cemetery_name}}</div>
                                        <div class="plotshead">
                                            {{$cemVal->address.',' .$cemVal->city.','.$cemVal->state}}
                                        </div>
                                    </td>
                                    <td width="350" style="padding: 15px;">
                                        <div class="thead">Actions</div>
                                        <div class="d-flex">
                                            <a class="btn_mid btn_cms_list mr-3"
                                                href="{{ url('cemeterys/getInvitePeople') }}">Manage
                                                Members</a>
                                            <a class="btn_mid btn_cms_list"
                                                href="{{ url('cemeterys/getAddMember') }}">Add
                                                Members</a>
                                        </div>
                                    </td>

                                    <td width="40" align ="right" style="padding: 15px;">
                                        <div class="moption  mt-4">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            <ul class="moptionul">
                                                <i class="fa fa-caret-up"></i>
                                                <li><a href="{{ url('cemeterys/getEdit')}}">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
=======
                            <div class="cntbox">
                                <table class="table mb-0 plot_table">
                                    <tr class="" style="">
                                        <td width="76" style="padding: 15px;">
                                            <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                        </td>
                                        <td width="" style="padding: 15px;">
                                            <div class="plothead">{{$cemVal->cemetery_name}}</div>
                                            <div class="plotshead">
                                                {{$cemVal->address.',' .$cemVal->city.','.$cemVal->state}}
                                            </div>
                                        </td>
                                        <td width="350" style="padding: 15px;">
                                            <div class="thead">Actions</div>
                                            <div class="d-flex">
                                                <a class="btn_mid btn_cms_list mr-3"
                                                    href="{{ url('cemeterys/getInvitePeople') }}">Manage
                                                    Members</a>
                                                <a class="btn_mid btn_cms_list"
                                                    href="{{ url('cemeterys/getAddMember') }}">Add
                                                    Members</a>
                                            </div>
                                        </td>

                                        <td width="40" align="right" style="padding: 15px;">
                                            <div class="moption  mt-4">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                <ul class="moptionul">
                                                    <i class="fa fa-caret-up"></i>
                                                    <li><a href="{{ url('cemeterys/getEdit')}}">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </table>        
                            </div>

                            @endforeach
                            
>>>>>>> d3ac9b946ddc75c49912bc133a4902eb8c6ca77b

                            <div class="d-flex justify-content-center">
                                {!! $cemeterys->links('pagination::bootstrap-4') !!}
                            </div>


                    </section>


                </div>


            </div>
        </div>


    </div>



</section>
@endsection