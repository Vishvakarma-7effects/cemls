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
                <div class="col-md-12 col-12"><h1 class="mheading">Widgets</h1></div>
            </div>


      <div id="switchTabContent" class="tab-content">
       <div class="tab-pane fade show active" id="switchone" role="tabpanel" aria-labelledby="switchone-tab">
        <div id="myTabContent" class="tab-content">
         <div class="tab-pane fade show active" id="burials" role="tabpanel" aria-labelledby="burials-tab">


          <section class="bxshadow mb-3 mb-md-5">
           <div class="cntbox">
            <div class="wrapper_outer">
             <div class=" bxshadow p-3 rounded">
              <div class="d-flex ">
               <div class="w-25">
                <img src="{{ asset('newPublic/images/userimg.png') }}" alt="" width="100%" />
               </div>
               <div class="w-75 ml-4">
                <div class="r_heading">
                 <h2>John Doe </h2>
                </div>

                <div class="r_text">john.doe@gmail.com </div>
                <div class="r_desc">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

                </div>
               </div>
              </div>
              <div class="d-flex justify-content-between update_text pt-3">
               <div class="t_update ">Last Updated 10 months ago</div>
               <button class="btn_mid btn_green">Copy Embed link</button>
              </div>
             </div>
             <div class=" bxshadow p-3 rounded custm_wrapper">
              <div class="d-flex ">
               <div class="w-25">
      <img src="{{ asset('newPublic/images/userimg.png') }}" alt="" width="100%" />         </div>
               <div class="w-75 ml-4">
                <div class="r_heading">
                 <h2>John Doe </h2>
                </div>

                <div class="r_text">john.doe@gmail.com </div>
                <div class="r_desc">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

                </div>
               </div>
              </div>
              <div class="d-flex justify-content-between update_text pt-3">
               <div class="t_update ">Last Updated 10 months ago</div>
               <div>
                <button class="btn_mid btn_green">Copy Embed link</button>
                <button class="btn_mid btn_green">Copy Embed link</button>
               </div>

              </div>
             </div>
            </div>
           </div>
          </section>



         </div>


        </div>
       </div>


      </div>
</section>





@endsection