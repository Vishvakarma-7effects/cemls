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
                            <h4 class="title-section float-left">Mailbox</h4>
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
                                                    <th>Received</th>
                                                    <th>Cemetery</th>
                                                   <th>CemLS Number	</th>
                                                    <th>Name</th>
													 <th>Email</th>
													 <th>Phone</th>
													 <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               

                                               @foreach ($data as $key => $value)
                                                <tr>
                                                     <td>
	<?php 	 ?>										 
													
@php

 $mil=$value->created_at;	
 echo $date = date("Y-m-d", $mil);

// echo date("Y-md/m/Y", ($mil / 1000) );
@endphp

													 </td>
            <td>{{ $value->inbox_title }}</td>
			 <td>{{ $value->cemetery360_inbox_plot }}</td>
			 <td>{{ $value->sender_name }}</td>
			  <td>{{ $value->sender_email }}</td>
			    <td>{{ $value->sender_phone }}</td>
            
			  <td>{{ $value->sender_message }}</td>
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
  