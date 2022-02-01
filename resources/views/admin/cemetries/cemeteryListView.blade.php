
@extends('layouts.mainOuterApp')

@section('content')

      <section class="inner_pages clearfix" id="mflist">
        <ul class="mobtoggle mflistbtn">
          <li><i class="fa fa-map" aria-hidden="true"></i> Map</li>
          <li><i class="fa fa-list-ul" aria-hidden="true"></i> List</li>
        </ul>
        <div class="mapinner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14007.216583004956!2d76.99848779601191!3d28.63563147918303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1642699357526!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <a class="btn btn-primary mflistbtn">
             <i class="fa fa-chevron-right"></i>
            </a>
        </div>
        <div class="innercnt">
          <h2 class="mheading pb-0 pl-0 pl-md-2 toverflow">Cemeteries in <span>Sacramento CA</span></h2>
          <h4 class="shtxt mb-3 mb-md-4 pl-0 pl-md-2">Showing 1 - 8 of 54</h4>
          <div class="row  pl-0 pl-md-2 mb-3">
            <div class="col-md-3 col-sm-4 col-4 plr-4">
              <select class="form-control fmbg">
                <option>Type</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-4 col-4 plr-4 ">
              <select class="form-control fmbg">
                <option>Price</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-4 col-4 plr-4">
              <select class="form-control fmbg">
                <option>Sort</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              <a href="#">
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              <a href="#">
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              <a href="#">
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
                <div class="boxinner"> 
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="" />
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
            </div>
          </div>
        </div>
      </section>

@endsection