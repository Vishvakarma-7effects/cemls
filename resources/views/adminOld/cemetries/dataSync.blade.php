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

  .b_card {
    box-shadow: 0 0 4px 0 rgb(147 150 153 / 27%);
  }
</style>
<section class="panelrht">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Property</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data Sync</li>
    </ol>
  </nav>

  <div class="row mb-3">
    <div class="col-md-8">
      <h1 class="mheading">Data Sync</h1>
    </div>
    <div class="col-lg-4">
      <div class="searchbx w-100 mb-2 mt-2 mb-lg-0 mt-lg-0 position-relative">
        <input type="text" class="form-control" id="" placeholder="Search by username or email">
        <a href="#"><i class="fa fa-search"></i></a>
      </div>

    </div>
  </div>
  {{-- <h1 class="mheading">Data Sync</h1> --}}
  <section class="bxshadow">
    <div class="cntbox">
      <div class="row">
        <div class="col-lg-4 col-sm-6 mt-4">
          <div class="card b_card">
            <img src="{{ asset('newPublic/images/img1.jpg') }}" style="height: 60px;">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-4">
          <div class="card b_card">
            <img src="{{ asset('newPublic/images/img1.jpg') }}" style="height: 60px;">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-4">
          <div class="card b_card">
            <img src="{{ asset('newPublic/images/img1.jpg') }}" style="height: 60px;">
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mt-4">
          <div class="card b_card">
            <img src="{{ asset('newPublic/images/img1.jpg') }}" style="height: 60px;">
          </div>
        </div>
      </div>
    </div>

  </section>




</section>

@endsection