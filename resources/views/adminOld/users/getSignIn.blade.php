<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
 <meta charset="utf-8" />
 <title>Cemls</title>
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="description" content="" />
 <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 {{-- <link href="css/adminab.css" rel="stylesheet" type="text/css" /> --}}
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
 <link href="{{ asset('newPublic/css/adminab.css') }}" rel="stylesheet">
 <link href="{{ asset('newPublic/css/bootstrap.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 {{-- @yield('styles') --}}

</head>
<style>
 .fb {
  color: #3B5998;
  background-color: white;
  border: 1px solid;
 }

 .google {
  color: #dd4b39;
  background-color: white;
  border: 1px solid;

 }
 .h_login{
 
 max-width: 380px;
 margin: 0 auto;
 font-size: 20px;
 font-weight: 300;
 color: #74787c;
 }
 .title_login{
 
 color: #74787c;
 }
 .fw_title{
 font-weight: 600;
 }
</style>


<body>
 <main class="maincnt">
  @include('partials.header')

  <section class="bxshadow">
  
   <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
     <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
       <div class="card" style="border-radius: 15px;">
        <div class="card-body pt-2 px-5 pb-5">
         <p class="fw_title title_login">Sign in to your Account</p>
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">Profile</a>
          </li>
         </ul>
         <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
           <form action="#">
            <div class="row">
             <div class="col-md-12">
  
              <div class="form-group row">
               <input type="email" class="form-control" placeholder="Enter email" id="email" auotfill="false">
              </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-12">
              <div class="form-group row">
               <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-12">
              <div class="form-group row">
               <button class="btn_mid btn_green text-center">Sign In</button>
               <div class="ml-5">
                <a class="form-check-input" href="javascript:void(0)"> forgot password?</a>
               </div>
  
              </div>
             </div>
            </div>
  
  
  
           </form>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
           <form action="#">
            <div class="row">
             <div class="col-md-12">
  
              <div class="form-group row">
               <input type="email" class="form-control" placeholder="Enter email" id="email" auotfill="false">
              </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-12">
  
              <div class="form-group row">
               <input type="email" class="form-control" placeholder="Enter email" id="email" auotfill="false">
              </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-12">
              <div class="form-group row">
               <input type="password" class="form-control" placeholder="Enter password" id="pwd">
              </div>
             </div>
            </div>
            <div class="row">
             <div class="col-md-12">
              <div class="form-group row">
               <button class="btn_mid btn_green text-center">Sign In</button>
               <div class="ml-5">
                <a class="form-check-input" href="javascript:void(0)"> forgot password?</a>
               </div>
  
              </div>
             </div>
            </div>
  
  
  
           </form>
          </div>
         </div>
         <div class="row">
          <div class="col-md-12">
           <div class="form-group row">
            <a href="#" class="fb btn mr-3">
             <i class="fa fa-facebook fa-fw"></i> Login with Facebook
            </a>
  
            <a href="#" class="google btn"><i class="fa fa-google fa-fw">
             </i> Login with Google+
            </a>
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



 </main>

 <script src="http://127.0.0.1:8000/newPublic/js/jquery.min.js"></script>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="http://127.0.0.1:8000/newPublic/js/bootstrap.min.js"></script>
 {{-- <script type="text/javascript"> --}}
</body>