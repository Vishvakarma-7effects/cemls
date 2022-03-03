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
   <li class="breadcrumb-item active" aria-current="page">Add Tag</li>
  </ol>
 </nav>
 <h1 class="mheading">Add Tag</h1>
 <form method="post" action="{{route('tag.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        @csrf

 <section class="bxshadow">

  <div class="cntbox">
   <h2 class="sheading"></h2>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-4">
     <div class="form-group row">
      <label for="" class="col-sm-4 col-form-label pr-0">Tag</label>
      <div class="col-sm-8 pl-3 pl-md-4">
       <input type="text" class="form-control" name="tag" id="" placeholder="" required>
      </div>
     </div>
    </div>
    
   </div>
   


   

   
  </div>

 

    <div class="cntbox">
         <button class="btn_mid btn_green" type="submit">Add</button>
         <button class="btn_mid btn_none ml-3">Cancel</button>
      </div>



  </div>
 </section>
</form>

</section>
<script>

 const actualBtn = document.getElementById('actual-btn');
 
 const fileChosen = document.getElementById('file-chosen');
 
 actualBtn.addEventListener('change', function(){
 fileChosen.textContent = this.files[0].name
 })
</script>
@endsection