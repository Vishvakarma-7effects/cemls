@extends('layouts.admin')

@section('content')
<section class="panelrht">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Members</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-8 col-md-6 float-left">
            <h1 class="mheading">Manage Members</h1>
        </div>
        <div class="col-lg-4 col-md-6 float-right text-right">
            <button class="btn_mid btn_green">Invite People</button>
            <button class="btn_mid btn_green">Add People</button>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12 pl-lg-0 col-12 tabcnt">
            <ul class="nav" id="myTab" role="tablist">
                <li class="nav-item mr-5 ml-3">
                    <span class="plotshead">Group manager: </span>ABCDE
                </li>
                <li class="nav-item mr-5">
                    <span class="plotshead"> Total Member: </span>23
                </li>

                <li class="nav-item mr-5">
                    <span class="plotshead">Total Content: </span>23
                </li>

            </ul>


        </div>
    </div>




    <div id="switchTabContent" class="tab-content">
        <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">
                    <section class="bxshadow mb-3 mb-md-5">
                        <div class="cntbox">
                            <table class="table-responsive mb-0">
                                @for($i =1; $i<=5 ;$i++) 
                                <tr class="border-bottom" style="">
                                    <td width="10%" style="padding: 15px;">
                                        <img src="{{ asset('newPublic/images/img1.jpg') }}" class="plot_img" />
                                    </td>
                                    <td width="60%" style="padding: 15px;">
                                        <div class="plothead">Carl Betz</div>
                                        <small class="plotshead">Administrator Member</small><br />
                                        <small class="plotshead">carlbetz@gmail.com</small>
                                    </td>


                                    <td width="10%" style="padding: 15px;">
                                        <div class="thead">Status</div>
                                        <div class="ttxt cl_green">Available</div>
                                    </td>
                                    <td width="15%" style="padding: 15px;">
                                        <div class="thead text-center">Member Since</div>
                                        <div class="ttxt cl_green text-center">24 jan 2017</div>
                                    </td>

                                    <td width="5%" align="right">
                                        <div class="moption">
                                            <i class="fa fa-ellipsis-v ellipsis_vertical" aria-hidden="true"></i>
                                            <ul class="moptionul">
                                                <i class="fa fa-caret-up "></i>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                    @endfor
                            </table>
                        </div>


                    </section>

                    <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                                <a class="page-link pn_arrow" href="#" aria-label="Previous">
                                    <i class="fa fa-caret-left"></i>
                                </a>
                            </li>
                            <li class="page-item "><a class="page-link " href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">12</a></li>
                            <li class="page-item">
                                <a class="page-link pn_arrow" href="#" aria-label="Next">
                                    <i class="fa fa-caret-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="tab-pane fade" id="cremations" role="tabpanel" aria-labelledby="cremations-tab">
                    <section class="bxshadow">
                        <div class="cntbox">
                            ...

                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="tab-pane fade pb-4" id="switchtwo" role="tabpanel" aria-labelledby="switchtwo-tab">
            <div class="mframe">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>



</section>
@endsection