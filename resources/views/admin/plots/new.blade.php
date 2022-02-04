@extends('layouts.admin')

@section('content')
<style>

datalist {
  display: flex;
  justify-content: space-between;
  color: #6A7175;
  /* width: 100%; */
}
#customRange1{
    width:100%;
}


</style>
    <section class="panelrht">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Property</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Plot</li>
            </ol>
        </nav>
        <h1 class="mheading">Add Plot</h1>
       <section class="bxshadow">
                <div class="cntbox">
                    <div class="row">
                      <div class="col-lg-9 pr-lg-0">
                          <div class="form-group row">
                            <p class="col-lg-3 col-sm-3 col-form-label pr-0">Location ID</p>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                              <p>Cemls#30453</p>
                            </div>
                          </div>

                          <div class="row">
                              <div class="col-md-7">
                                  <div class="form-group row">
                                    <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">Garden</label>
                                    <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0 text-right">Section</label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-md-7">
                                  <div class="form-group row">
                                    <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1 text-right">Lot</label>
                                    <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>

                              <div class="col-md-5">
                                  <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label pr-0 pl-md-0">Row</label>
                                    <div class="col-sm-9 pl-3 pl-md-4 ">
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                  </div>
                              </div>
                             
                          </div>
                          <div class="row">
                            <div class="col-md-7">
                                <div class="form-group row">
                                  <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Grave</label>
                                  <div class="col-md-6 col-sm-9 pl-3 pl-md-4 ">
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>
                                </div>
                              </div>
                              
                        </div>
                        <!-- <div class="row">
                          <div class="col-md-12">
                              <div class="form-group row">
                                <div class="col-md-3 col-sm-9 pl-3 pl-md-4 d-flex "></div>
                                <div class="col-md-5 col-sm-9 pl-3 pl-md-4 d-flex ">
                                  <input type="text" class="form-control" id="" placeholder="Create Custom label ">
                                  <button class="btn_search">
                                        <i class="fa fa-plus"  aria-hidden="true"></i>
                                    </button>
                                </div>
                              </div>
                            </div>
                           
                        </div>  -->
                        
                        <div class="row">
                          <div class="col-md-7">
                              <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Status</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label col-form-label" for="exampleRadios1">
                                      Available
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label col-form-label" for="exampleRadios2">
                                    Reserved
                                    </label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label col-form-label" for="exampleRadios2">
                                      Sold
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                              <div class="form-group row">
                                <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Types</label>
                                <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">

                                   <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Burial</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Cremation</label>
                                  </div>
                                  
                                   <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Indoor</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
                                  </div>
                                  {{-- @foreach ($roles as $roleItem)
                                      
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $roleItem->id }}">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox1"> {{ ucFirst($roleItem->name) }}</label>
                                  </div>
                                @endforeach --}}


                                  {{-- <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label col-form-label" for="inlineCheckbox2">Outdoor</label>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                        </div>


                      </div>
                      

                      <div class="col-lg-3 text-right">
                        {{-- <button class="btn_lg btn_none">Add 360 Image</button> --}}
                        <button class="btn_lg btn_green my-lg-3 mx-md-2 mx-lg-0">Add Photos</button>
                        <button class="btn_lg btn_green">Add Videos</button>
                      </div>
                    </div>
                </div>
                <div class="cntbox">
                   
                    
                
                  <div class="row">
                    <div class="col-lg-9 pr-lg-0">
                         <div class="form-group row">

                            <label for="customRange1" class="col-lg-3 col-sm-3 col-form-label">Price</label>
                            <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">


                            <datalist id="tickmarks">
                            <option value="0" label="$500"></option>
                            <option value="100" label="$5000"></option>
                            </datalist>      
                              <input type="range" list="tickmarks" id="customRange1">

                                <div class="col-md-6 col-sm-9">
                                      <input type="text" value="$500" class="form-control" id="" placeholder="">
                                  </div>
                        </div>
                        </div>      
                      {{-- <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Plot Name</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <input type="text" class="form-control" id="" placeholder="">
                        </div>
                      </div> --}}
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Description</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                              <label for="" class="col-md-5 col-sm-3 col-form-label pr-0 mr-md-1">Public</label>
                              <div class="col-md-6 col-sm-9 pl-3 pl-md-4 d-flex justify-content-between">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                  <label class="form-check-label col-form-label" for="exampleRadios1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                  <label class="form-check-label col-form-label" for="exampleRadios2">
                                  No
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-lg-3 col-sm-3 col-form-label pr-0">Internal Notes</label>
                        <div class="col-lg-7 col-sm-9 pl-3 pl-md-4">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
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
                        <b>Latitude:</b> 40.3189719  <span class="d-inline-block pl-3"><b>Longitude:</b> -80.11131890000001</span>
                      </div>
                    </div>

                    <div class="mframe mb-4 pb-1">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.071679905!2d64.40183608457193!3d20.04915895569306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1641668183864!5m2!1sen!2sin" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    
                </div>

                <div class="cntbox">  
                    <button class="btn_mid btn_green">Add</button>
                    <button class="btn_mid btn_none ml-3">Cancel</button>
                  </div>
            </section>




    </section>

@endsection
