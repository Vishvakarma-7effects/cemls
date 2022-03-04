@extends('layouts.admin')

@section('content')



<section class="panelrht">
 <nav aria-label="breadcrumb " class="mt-3 mt-lg-0">
  <ol class="breadcrumb d-none d-lg-block">
   <li class="breadcrumb-item active" aria-current="page">&nbsp;</li>
  </ol>
 </nav>
 <h1 class="mheading">Dashboard</h1>
 <section class="bxshadow">
  <div class="cntbox">
   <div class="row">
    <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-0 pr-lg-3">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#ttllistModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon1.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>{{count($cemeteryscount)}}</h3>
       <p>Total Listings</p>
      </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-3 pr-lg-3 pr-md-0">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#lrecdModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon2.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>{{count($mailcount)}}</h3>
       <p>Lead Recieved</p>
      </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-4 col-6 mb-3 mb-lg-4 pr-0 pr-md-3">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#listingModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon3.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>{{count($plotscount)}}</h3>
       <p>Top Listings</p>
      </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-4 col-6 mb-lg-4 pr-3 pr-lg-3 pr-md-0">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#zcodeModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon4.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>17</h3>
       <p>Top Zip Codes</p>
      </div>
     </div>
    </div>

    {{-- <div class="col-lg-3 col-md-4 col-6 pr-0 pr-lg-3 pr-md-0">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#smModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon5.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>28</h3>
       <p>Social Media Leads</p>
      </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-4 col-6">
     <div class="dashbx clearfix" data-toggle="modal" data-target="#mbuModal">
      <div class="dashbx_img">
       <img src="{{ asset('newPublic/images/dash-icon6.png') }}" alt="" />
      </div>
      <div class="dashbx_cnt">
       <h3>54%</h3>
       <p>Mobile Users</p>
      </div>
     </div>
    </div> --}}

   </div>
  </div>
  <div class="px-3">
   <div class="row">
    <div class="col-lg-4 py-3 py-lg-4 dashlft text-center">
     <h2 class="sheading text-center">My Cemeteries Progress</h2>
     <svg class="progress blue noselect" data-progress="75" x="0px" y="0px" viewBox="0 0 80 80">
      <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
      <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
      <text class="value" x="50%" y="55%">0%</text>
     </svg>
     <p class="mb-0"><span>Completing Phone will bring</span><br /><bdi class="cl_blue">Rozet Cemetery CCCD</bdi> to
      85%.</p>
    </div>
    <div class="col-lg-8 py-3 py-lg-4 dashrht">
     <h2 class="sheading mb-2">Rozet Cemetery CCCD</h2>
     <div class="row">
      <div class="col-lg-6">
       <h4>Map views v Listing views</h4>
      </div>
      <div class="col-lg-6">
       <div class="calbx">
        <i class="fa fa-calendar"></i>
        <input  class="form-control" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />

        {{-- <input type="text" class="form-control" name="" placeholder="03/01/2018 - 03/13/2018" /> --}}
       </div>
      </div>
     </div>

     <div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
      <div class="carousel-inner">
       <div class="carousel-item active">
        <canvas id="speedChart" width="600" height="270"></canvas>
       </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <i class="fa fa-chevron-left"></i>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <i class="fa fa-chevron-right"></i>
      </a>
     </div>

    </div>
   </div>
  </div>

  <div class="cntbox border-top">
   <h2 class="sheading mb-2">Visitor’s Location</h2>
   <h4 class="hline">Top locations from where the listings are viewed</h4>
   <div class="row">
    <div class="col-lg-7">
     <div class="wmap">
      <img src="{{ asset('newPublic/images/worldmap.jpg') }}" />
     </div>
    </div>

    <div class="col-lg-5">
     <table class="table stable">
      <thead>
       <tr>
        <th scope="col"></th>
        <th scope="col">Location</th>
        <th scope="col"># of listing views</th>
       </tr>
      </thead>
      <tbody>
        @foreach($location as $key=>$row)
       <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$row->location_name}}</td>
        <td>{{$row->view !=null ? $row->view :0}}</td>
       </tr> 
       <tr>
         @endforeach
     
      
       
      </tbody>
     </table>
    </div>
   </div>
  </div>

  <div class="row">
   <div class="col-lg-6 ">
    <div class="pad38">
     <h2 class="sheading">My Listings </h2>
     @foreach($recentPlotlists as $key=>$row)
     <div class="plotbx clearfix">
      <div class="plot_img">
      <?php

                         
    $plotgallery=getplotgallery($row->id);

     if(!empty($plotgallery[0]->plotimage)) {  ?>

       <img src="{{asset('/uploads/plotgallery/' . $plotgallery[0]->plotimage)}}" class="plot_img" />
       <?php } else { ?>

   <img src="{{asset('/uploads/')}}/noimage.png" class="plot_img"/>
          <?php } ?>
      </div>
      <div class="plot_cnt">
      <h3>CemLS #{{$row->id}}</h3>

       <h4><?php
 //echo $row->cemetery_id;
                         
                         $cemeteryname=getcemeteryname($row->cemetery_id);
                   if(!empty($cemeteryname[0]->cemetery_name)) {  echo  $cemeteryname[0]->cemetery_name; }
                            ?></h4>
       <!-- <h4>{{$row->address}}</h4> -->
       <h4>{{$row->address}} {{$row->city}} {{$row->state}}</h4>
       <p>{{$row->plot_number}} {{$row->section}} {{$row->row}}</p>
      </div>
     </div>
     @endforeach

     
     <a href="{{url('plots')}}"><button class="btn_small btn_bgreen mt-3">View all listings</button></a>
    </div>
   </div>

   <div class="col-lg-6 border-left dmbx">
    <div class="pad38 dmbxinner">
     <h2 class="sheading">Recent Messages</h2>
     <table class="table stable mb-0 mt-4">

      <tbody>
        @foreach($recentmsg as $key=>$row)
       <tr>
        <td>{{$row->inbox_title}}</td>
        <td>CemLS #{{$row->cemetery360_inbox_plot}}</td>
        <td>{{date('Y-m-d',strtotime($row->created_at))}}</td>
       </tr>
       @endforeach
       
       
       
      </tbody>
     </table>

     <a href="{{url('mailbox')}}"><button class="btn_small btn_bgreen mt-3">View all Messages</button></a>
    </div>
   </div>
  </div>
 </section>

</section>




<!-- Modal -->
<div class="modal fade smodal" id="mbuModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Mobile User Statistics</h2>
   <p class="mb-2">% of mobile users: 54</p>
   <p class="mb-2 cl_grey">Here are the top mobile users percentage</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Device</th>
      <th scope="col">OS</th>
      <th scope="col">% of users</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <th scope="row">1</th>
      <td>iPhone 7</td>
      <td>iOS</td>
      <td>37%</td>
     </tr>
     <tr>
      <th scope="row">2</th>
      <td>Samsung S9</td>
      <td>Android</td>
      <td>21%</td>
     </tr>
     <tr>
      <th scope="row">3</th>
      <td>Moto G5 Plus</td>
      <td>Android</td>
      <td>16%</td>
     </tr>
     <tr>
      <th scope="row">4</th>
      <td>iPhoneX</td>
      <td>iOS</td>
      <td>12%</td>
     </tr>
     <tr>
      <th scope="row">5</th>
      <td>iPhone 6</td>
      <td>iOS</td>
      <td>7%</td>
     </tr>
    </tbody>
   </table>
   <div class="text-left">
    <button class="btn_mid btn_green">View all mobile user statistics</button>
   </div>
  </div>
 </div>
</div>

<div class="modal fade smodal" id="smModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Social Media Leads</h2>
   <p class="mb-2">Number of social media leads <small>(Facebook & Twitter)</small>: 28</p>
   <p class="mb-2 cl_grey">Here are the latest social media leads</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Source</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <th scope="row">1</th>
      <td>Justine Henderson</td>
      <td>justine.henderson@mail.com</td>
      <td>Twitter</td>
     </tr>
     <tr>
      <th scope="row">2</th>
      <td>Marcus Cruz</td>
      <td>marcus.cruz@mail.com</td>
      <td>Facebook</td>
     </tr>
     <tr>
      <th scope="row">3</th>
      <td>Thalia Cobb</td>
      <td>thalia.cobb@mail.com</td>
      <td>Facebook</td>
     </tr>
     <tr>
      <th scope="row">4</th>
      <td>Eddie Randolph</td>
      <td>eddie.randolph@mail.com</td>
      <td>Twitter</td>
     </tr>
     <tr>
      <th scope="row">5</th>
      <td>Angela Walker</td>
      <td>angela.walker@mail.com</td>
      <td>Facbook</td>
     </tr>
    </tbody>
   </table>
   <div class="text-left">
    <button class="btn_mid btn_green">View all social media leads</button>
   </div>
  </div>
 </div>
</div>

<div class="modal fade smodal" id="zcodeModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Top Zip Codes</h2>
   <p class="mb-2">Number of top Zip Codes: 17</p>
   <p class="mb-2 cl_grey">Here are the top 5 Zip Codes</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Zip Code</th>
      <th scope="col">Number of Views</th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <th scope="row">1</th>
      <td>94244</td>
      <td>347</td>
     </tr>
     <tr>
      <th scope="row">2</th>
      <td>72217</td>
      <td>302</td>
     </tr>
     <tr>
      <th scope="row">3</th>
      <td>94209</td>
      <td>286</td>
     </tr>
     <tr>
      <th scope="row">4</th>
      <td>80201</td>
      <td>215</td>
     </tr>
     <tr>
      <th scope="row">5</th>
      <td> 24517</td>
      <td>191</td>
     </tr>
    </tbody>
   </table>
   <div class="text-left">
    <button class="btn_mid btn_green">View all top zip codes</button>
   </div>
  </div>
 </div>
</div>

<div class="modal fade smodal" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Top Listings</h2>
   <p class="mb-2">Number of top listings: {{count($plotscount)}}</p>
   <p class="mb-2 cl_grey">Here are the top 10 listings</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Location ID</th>
      <th scope="col">Number of Views</th>
     </tr>
    </thead>
    <tbody>
    @foreach($recentPlot as $key=>$row)

     <tr>
      <th scope="row">{{$key+1}}</th>
      <td>CemLS #{{$row->id}}</td>
      <td>{{$row->view !=null ? $row->view : 0}}</td>
     </tr>
     @endforeach

    </tbody>
   </table>
   <div class="text-left">
    <button class="btn_mid btn_green">View all top listings</button>
   </div>
  </div>
 </div>
</div>

<div class="modal fade smodal" id="lrecdModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Leads Received</h2>
   <p class="mb-2">Total number of leads: {{count($mailcount)}}</p>
   <p class="mb-2 cl_grey">Here are the latest leads</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     </tr>
    </thead>
    <tbody>
      @foreach($mail as $key=>$row)
     <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$row->sender_name}}</td>
      <td>{{$row->sender_email}}</td>
     </tr>
     @endforeach
    </tbody>
   </table>
   <div class="text-left">
    <a href="{{url('mailbox')}}"><button class="btn_mid btn_green">View all leads</button></a>
   </div>
  </div>
 </div>
</div>

<div class="modal fade smodal" id="ttllistModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
   </button>
   <h2 class="sheading">Total Listings</h2>
   <p class="mb-2">Total number of listings: {{count($cemeteryscount)}}</p>
   <p class="mb-2 cl_grey">Here are the latest listings</p>
   <table class="table stable ">
    <thead>
     <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
     </tr>
    </thead>
    <tbody>
      @foreach($cemeterys as $key=>$row)
     <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <td>{{$row->plottype}}<{{$row->plottype2}}/td> -->
      <td>{{$row->cemetery_name}}</td>
      <td>{{$row->address}}</td>
     </tr>
     @endforeach
     
    </tbody>
   </table>
   <div class="text-left">
    <a href="{{url('cemeteries')}}"><button class="btn_mid btn_green">View all listings</button></a>
   </div>
  </div>
 </div>
</div>

<!-- <script src="js/jquery.min.js"></script> -->
{{-- Date Picker start --}}

{{-- Date Picker end --}}
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

{{-- <script src="{{ asset('newPublic') }}/js/custom.js"></script> --}}




<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}

<script>
 $(function() {
var options = {};
  // if ($('#ranges').is(':checked')) {
  options.ranges = {
  'Today': [moment(), moment()],
  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
  'This Month': [moment().startOf('month'), moment().endOf('month')],
  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  };
  // }

  // $('input[name="daterange"]').daterangepicker(options,
  // {
  // opens: 'left'
  // },
  //  function(start, end, label) { console.log('New date range selected: ' +
  //   start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')'); }).click();

  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });


});

      var forEach = function (array, callback, scope) {
        for (var i = 0; i < array.length; i++) {
          callback.call(scope, i, array[i]);
        }
      };
      window.onload = function(){
        var max = -219.99078369140625;
        forEach(document.querySelectorAll('.progress'), function (index, value) {
        percent = value.getAttribute('data-progress');
          value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
          value.querySelector('.value').innerHTML = percent + '%';
        });
      }



</script>
@endsection


@endsection