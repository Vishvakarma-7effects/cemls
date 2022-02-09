@extends('layouts.admin')

@section('content')
<style>
 datalist {
  display: flex;
  justify-content: space-between;
  color: #6A7175;
  /* width: 100%; */
 }

 #customRange1 {
  width: 100%;
 }

 .user_title h2 {
  font-weight: bold;
  font-size: 22px;
  margin-bottom: 10px;
  margin-top: 20px;
  color: #4e555a;
 }

 .vertical_arrow {
  color: #929699;
  font-size: 22px;
  margin-left: 14px;
  transform: rotate(90deg);
 }
</style>
<section class="panelrht">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="#">Property</a></li>
   <li class="breadcrumb-item active" aria-current="page">Edit Cemetery</li>
  </ol>
 </nav>
 <h1 class="mheading">Edit Cemetery</h1>

 <section class="bxshadow">
 <form action="{{ route('plot.update',$plot->id) }}" method="POST" enctype="multipart/form-data">
     
  <div class="cntbox">
   <div class="row">
    <div class="col-lg-7">
     <div class="user_img ">
      <img src="images/userimg.png" alt="" />
      <span class="upimg">
       <input type="file" id="" name="">
       <i class="fa fa-camera"></i>
      </span>
     </div>
     <div class="user_info">
      <!-- <h2>John Doe <i class="fa fa-pencil editbx"></i></h2> -->
            <h2>{{$cemeterys->cemetery_name}}</h2>

      <div class="uemail">{{$cemeterys->country}}  <i class="fa fa-pencil editbx"></i></div>
      <div class="uemail">{{$cemeterys->state}}</div>
      <div class="uemail">{{$cemeterys->city}} </div>
      <div class="ujoin">Member <small>since</small> {{$created_at}}</div>

     </div>
    </div>
    <div class="col-lg-5" style="text-align: end;">
     <div class="d-flex justify-content-end ">
      <button class="btn_mid btn_green">Update</button>
      <div class="moption ml-2" style="text-align: end;">
       <i class="fa fa-ellipsis-v vertical_arrow" aria-hidden="true"></i>
       <ul class="moptionul">
        <i class="fa fa-caret-up"></i>
        <li><a href="#">Edit</a></li>
        <li><a href="#">Delete</a></li>
       </ul>
      </div>
     </div>
     <div class="mt-5">
      <button class="btn_lg btn_bgreen">Photos(22)</button>
      <button class="btn_lg btn_bgreen">Videos(2)</button>
     </div>
    </div>
    <div class="col-lg-12">
     <div class="user_title">
      <h2>About Cemetery <i class="fa fa-pencil editbx"></i></h2>
     </div>
     <p class="uemail text-justify">{{$cemeterys->cemetery_desc}}</p>
    </div>
   </div>
  </div>

  <div class="cntbox">
   <div class="row">
    <div class="col-lg-6 mb-3">
     <div class="loc_search position-relative">
      <input type="text" class="form-control" id="" placeholder="enter location">
      <a href="#"><i class="fa fa-search"></i></a>
      <button class="btn_mid btn_bgreen px-3">Get Location</button>
     </div>
    </div>

    <div class="col-lg-6 mb-1 mb-md-3 loctxt d-flex justify-content-center align-items-end">
     <b>Latitude:</b> 40.3189719 <span class="d-inline-block pl-3"><b>Longitude:</b> -80.11131890000001</span>
    </div>
   </div>

   <div class="mframe mb-4 pb-1">
    <iframe
     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin"
     width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>
   <div class="cntbox">
    <div class="row">
     <div class="col-xs-4 mr-2"> {{-- <div class="form-group row"> --}}
      <input type="text" class="form-control" id="" placeholder="">
      {{-- </div> --}}
     </div>

     <div class="col-xs-4"> {{-- <div class="form-group row"> --}}
      <input type="text" class="form-control" id="" placeholder="">
      {{-- </div> --}}
     </div>


    </div>


   </div>
  </div>



 </section>




</section>

@endsection