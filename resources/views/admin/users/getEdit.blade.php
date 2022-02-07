@extends('layouts.admin')

@section('content')
<style>
 .col_form_custom {
  align-items: start;
 }
.file_label {
 border: 1px solid #6A7175;
background-color:none;
color: #6A7175;
/* padding: 0.5rem; */
padding: 14px 28px;
font-family: sans-serif;
border-radius: 0.3rem;
cursor: pointer;
margin-top: 1rem;
margin-right: 0.5rem;
}

#file-chosen{
margin-left: 0.3rem;
font-family: sans-serif;
}

</style>
<section class="panelrht">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="#">Home</a></li>
   <li class="breadcrumb-item active" aria-current="page">Edit    User</li>
  </ol>
 </nav>
 <h1 class="mheading">Edit    User</h1>
 <section class="bxshadow">

  <div class="cntbox">
   <h2 class="sheading">Basic Details</h2>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">User Name</label>
      <div class="col-sm-8 pl-3 pl-md-4">
       <input type="text" class="form-control" id="" placeholder="">
      </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">Current Password</label>
      <div class="col-sm-8 pl-3  pl-md-4">
       <input type="password" class="form-control" id="" placeholder="">
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">Email address</label>
      <div class="col-sm b  -8 pl-3 pl-md-4">
       <input type="email" class="form-control" id="" placeholder="">
      </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">Confirm Password</label>
      <div class="col-sm-8 pl-3 pl-md-4">
       <input type="password" class="form-control" id="" placeholder="">
      </div>
     </div>
    </div>
   </div>


   {{-- <div class="row">
    <div class="col-lg-6 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-sm-3 col-form-label pr-0 mr-md-1 col_form_custom">Type</label>
      <div class="col-sm-7  pl-4 pl-md-4 ">
       <div class="row">
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
           Cemetry User
          </label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
           Pubic User
          </label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
           Vendor
          </label>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div> --}}

   {{-- <div class="row">
    <div class="col-lg-6 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-sm-3 col-form-label pr-0 mr-md-1">Status</label>
      <div class="col-sm-7  pl-4 pl-md-4 ">
       <div class="row">
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
           Active
          </label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
           Blocked
          </label>
         </div>
        </div>

       </div>
      </div>
     </div>
    </div>
    <div class="col-lg-6 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label col_form_custom pr-0 mr-md-1">Roles</label>
      <div class="col-sm-7 pl-3 pl-md-4 d-flex justify-content-between">
       <div class="row">
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Outdoor</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
          <label class="form-check-label" for="inlineCheckbox2">Outdoor</label>
         </div>
        </div>
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
          <label class="form-check-label" for="inlineCheckbox3">Outdoor</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
          <label class="form-check-label" for="inlineCheckbox4">Outdoor</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
          <label class="form-check-label" for="inlineCheckbox5">Outdoor</label>
         </div>
        </div>

       </div>
      </div>
     </div>
    </div>
   </div> --}}
<div class="col-lg-6 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label col_form_custom pr-0 mr-md-1">Roles</label>
      <div class="col-sm-7 pl-3 pl-md-4 d-flex justify-content-between">
       <div class="row">
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
          <label class="form-check-label" for="inlineCheckbox1">Role1</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
          <label class="form-check-label" for="inlineCheckbox2">Role2</label>
         </div>
        </div>
        <div class="col-lg-6 col-6 mb-md-2">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
          <label class="form-check-label" for="inlineCheckbox3">Role3</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
          <label class="form-check-label" for="inlineCheckbox4">Role4</label>
         </div>
        </div>
        <div class="col-lg-6 col-6">
         <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
          <label class="form-check-label" for="inlineCheckbox5">Role</label>
         </div>
        </div>

       </div>
      </div>
     </div>
    </div>

  </div>


  <div class="cntbox">
   <h2 class="sheading">Picture</h2>
   <div class="row">
    <div class="col-md-6">
     <div class="form-group">

      <input type="file" id="actual-btn" hidden />
      
      <!-- our custom upload button -->
      <label class="file_label" for="actual-btn">Choose File</label>
      
      <!-- name of file chosen -->
      <span id="file-chosen">No file chosen</span>
     </div>
     <small class="col-form-label"> Picture larger than 1024*1024 pixels will be scaled down</small>

    </div>
   </div>



   {{-- <button class="btn_mid btn_none">Delete This Account</button> --}}
  </div>
  <!-- <div class="cntbox">
   <h2 class="sheading">Membership</h2>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">User Name</label>
      <div class="col-sm-8 pl-3 pl-md-4">
       <input type="text" class="form-control" id="" placeholder="">
      </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">Subscription</label>
      <div class="col-sm-8 pl-3 pl-md-4">
      <select class="form-control form-select-lg mb-3">
         <option selected>Business</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
         </select>
      </div>
      
     </div>
    </div>
   </div>

  </div> -->
  <!-- <div class="cntbox">
   <h2 class="sheading">Permission</h2>
   <div class="row">
    <div class="col-md-6 mb-4">

     <div class="nk-block-actions d-flex justify-content-between border-bottom">
      <label for="title1" class="role-sheading ">Title 1</label>
      <div class="custom-control custom-switch mr-n2 ">
       <input type="checkbox" ng-model="prot.status" ng-checked="false == true"
        class="custom-control-input ng-valid ng-empty ng-dirty ng-valid-parse ng-touched" id="activity-logCADD"
        data-ng-click="protocolUpdate(prot)">
       <label class="custom-control-label" for="activity-logCADD"></label>
      </div>
     </div>

     <div class="row">
      <div class="col-10 col-md-11 mt-3">
       <label for="defaultCheck" class="col-form-label">Default checkbox</label>
      </div>
      <div class="col-2 col-md-1 mt-3 text-center">
       <input type="checkbox" id="defaultCheck" name="example2">
      </div>
     </div>

     <div class="row">
      <div class="col-10 col-md-11 mt-3">
       <label for="defaultCheck" class="col-form-label">Default checkbox</label>
      </div>
      <div class="col-2 col-md-1 mt-3 text-center">
       <input type="checkbox" id="defaultCheck" name="example2">
      </div>
     </div>
    </div>
    <div class="col-md-6 mb-4">
     <div class="nk-block-actions d-flex justify-content-between border-bottom">
      <label for="title1" class="role-sheading ">Title 1</label>
      <div class="custom-control custom-switch mr-n2 ">
       <input type="checkbox" ng-model="prot.status" ng-checked="false == true"
        class="custom-control-input ng-valid ng-empty ng-dirty ng-valid-parse ng-touched" id="activity-logCADD"
        data-ng-click="protocolUpdate(prot)">
       <label class="custom-control-label" for="activity-logCADD"></label>
      </div>
     </div>
     <div class="row">
      <div class="col-10 col-md-11 mt-3">
       <label for="defaultCheck" class="col-form-label">Default checkbox</label>
      </div>
      <div class="col-2 col-md-1 mt-3 text-center">
       <input type="checkbox" id="defaultCheck" name="example2">
      </div>
     </div>
     <div class="row">
      <div class="col-10 col-md-11 mt-3">
       <label for="defaultCheck" class="col-form-label">Default checkbox</label>
      </div>
      <div class="col-2 col-md-1 mt-3 text-center">
       <input type="checkbox" id="defaultCheck" name="example2">
      </div>
     </div>
    </div>
    <div class="col-md-6 mt-5">
     <div class="nk-block-actions d-flex justify-content-between border-bottom">
      <label for="title1" class="role-sheading ">Title 1</label>
      <div class="custom-control custom-switch mr-n2 ">
       <input type="checkbox" ng-model="prot.status" ng-checked="false == true"
        class="custom-control-input ng-valid ng-empty ng-dirty ng-valid-parse ng-touched" id="activity-logCADD"
        data-ng-click="protocolUpdate(prot)">
       <label class="custom-control-label" for="activity-logCADD"></label>
      </div>
     </div>
     @for($i =0; $i<=5;$i++) <div class="row">
      <div class="col-10 col-md-11 mt-3">
       <label for="defaultCheck" class="col-form-label">Default checkbox</label>
      </div>
      <div class="col-2 col-md-1 mt-3 text-center">
       <input type="checkbox" id="defaultCheck" name="example2">
      </div>
    </div>
    @endfor
    {{-- <div class="row">
       <div class="col-10 col-md-11 mt-3">
        <label for="defaultCheck" class="col-form-label">Default checkbox</label>
       </div>
       <div class="col-2 col-md-1 mt-3 text-center">
        <input type="checkbox" id="defaultCheck" name="example2">
       </div>
      </div> --}}
   </div>
  </div> -->


  <div class="row">
   <div class="col-lg-6 pr-lg-4">
    <div class="nk-block-actions d-flex  border-top py-4 mt-4 ">
     {{-- <div class="col-sm-8"> --}}
     <button class="btn_mid btn_green">Submit</button>
     <button class="btn_mid btn_none float-right mw_initial ml-2">Cancel</button>
     {{-- </div> --}}
    </div>
   </div>
  </div>



  </div>
 </section>

</section>
<script>

 const actualBtn = document.getElementById('actual-btn');
 
 const fileChosen = document.getElementById('file-chosen');
 
 actualBtn.addEventListener('change', function(){
 fileChosen.textContent = this.files[0].name
 })
</script>
@endsection