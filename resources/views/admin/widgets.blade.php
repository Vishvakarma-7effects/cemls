@extends('layouts.admin')

@section('content')
<style>
 .r_heading h2 {
  font-weight: bold;
  font-size: 22px;
  margin-bottom: 5px;
  color: #4e555a;
 }

 .r_text {
  color: #747a7d;
  font-weight: 200;
  font-size: 17px;
 }

 .r_desc {
  color: #747a7d;
  font-weight: 100;
  font-size: 15px;
 }

 .t_update {
  color: #747a7d;
  font-weight: 100;
  font-size: 14px;
  font-style: italic;
  margin-top: 15px;
 }

 .update_text .btn_mid {
  padding: 0 10px;
  height: 35px !important;
  font-size: 13px;
 }

 .wrapper_outer {
  display: flex;
 }

 .custm_wrapper {
  margin-left: 40px;
 }

 @media (max-width: 600px) {
  .wrapper_outer {
   flex-wrap: wrap;
   width: 100%;
  }

  .custm_wrapper {
   margin-left: 0;
  }
 }
</style>
<section class="panelrht">
         <nav aria-label="breadcrumb" class="mt-3 mt-lg-0">
              <ol class="breadcrumb d-none d-lg-block">
                <li class="breadcrumb-item active" aria-current="page">&nbsp;</li>
              </ol>
            </nav>
            <div class="row">
                <div class="col-md-12 col-12"><h1 class="mheading"></h1></div>
            </div>

             <div class="row">
        <div class="col-lg-2 col-12">
            <h1 class="mheading">Widgets</h1>
        </div>
        <div class="col-lg-10 pl-lg-0 col-12 tabcnt">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item ">
                    <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#burials1" role="tab"
                        aria-controls="Indoor" aria-selected="false">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="home-tab" data-toggle="tab" href="#burials1" role="tab"
                        aria-controls="Burials" aria-selected="true">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cremations" role="tab"
                        aria-controls="Cremations" aria-selected="false">Inactive</a>
                </li>
              
               
            </ul>

            <div class="searchbx position-relative">
                <input type="text" class="form-control" id="" placeholder="Cemetery Name or ID">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>

            
        </div>
    </div>
      <div id="switchTabContent" class="tab-content">
       <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
        <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">


          <section class="bxshadow mb-3 mb-md-5">
           <div class="cntbox">
            <div class="wrapper_outer">
             <div class=" bxshadow p-3 rounded widget">
              <div class="d-flex">
               <div class="w-25">
                <img src="{{ asset('newPublic/images/img1.jpg') }}" alt="" height="100%;" width="100%" />
               </div>
               <div class="w-75 ml-4">
                <div class="r_heading">
                 <h2>Forest Lawn New York Testing
 </h2>
                </div>

                <div class="r_text">john.doe@gmail.com </div>
                <div class="r_desc">
                

                </div>
               </div>
              </div>
              <div class="d-flex justify-content-between update_text pt-3">
               <div class="t_update ">Last Updated 10 months ago
 <input data-id="userid" class="form-control" id="" type="checkbox" data-toggle="toggle" data-on="Active" checked data-off="Inactive"  data-size="small" data-onstyle="primary">
               </div>
               <button class="btn_mid btn_green">Copy Embed link</button>
              </div>
             </div>
             <div class=" bxshadow p-3 rounded custm_wrapper widget">
              <div class="d-flex ">
               <div class="w-25">
      <img src="{{ asset('newPublic/images/img1.jpg') }}" alt="" height="100%;" width="100%" />         </div>
               <div class="w-75 ml-4">
                <div class="r_heading">
                 <h2>American Heritage Cemetery Funeral Home Crematory </h2>
                </div>

                <div class="r_text">john.doe@gmail.com </div>
                <div class="r_desc">
                
                </div>
               </div>
              </div>
              <div class="d-flex justify-content-between update_text pt-3">
               <div class="t_update ">Last Updated 10 months ago <input data-id="userid" class="form-control" id="" type="checkbox" data-toggle="toggle" data-on="Active" checked data-off="Inactive"  data-size="small" data-onstyle="primary">
</div>
               <div>
                <button class="btn_mid btn_green">Copy Embed link</button>
               
               </div>

              </div>
             </div>
            </div>
           </div>
          </section>


        <nav aria-label="Page navigation  example" class="mb-4 mb-md-5">
            <ul class="pagination justify-content-end">
                <li class="page-item">
                <a class="page-link pn_arrow" href="#" aria-label="Previous">
                        <i class="fa fa-caret-left"></i>
                </a>
            </li>
            {{-- <li class="page-item">
                                                                
                        {!! $cemeterys->links('pagination::bootstrap-4') !!}
                </li> --}}

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


         </div>


        </div>
       </div>


      </div>
</section>


<style>
.p-3 {
    width: 50%;
    padding: 10px !important;
    }

</style>
@endsection