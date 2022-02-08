@extends('layouts.mainOuterApp')

@section('content')

<section class="inner_pages clearfix" id="mflist">
  <ul class="mobtoggle mflistbtn">
    <li><i class="fa fa-map" aria-hidden="true"></i> Map</li>
    <li><i class="fa fa-list-ul" aria-hidden="true"></i> List</li>
  </ul>
  <div class="mapinner">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14007.216583004956!2d76.99848779601191!3d28.63563147918303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1642699357526!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <a class="btn btn-primary mflistbtn">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <div class="innercnt pt-3">

    <div class="row mb-2">
      <div class="col-md-3 col-sm-4 col-4 plr-4">
        <select class="form-control fmbg">
          <option>Type</option>
        </select>
      </div>
      <div class="col-md-3 col-sm-4 col-4 plr-4">
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

    <div class="boxinnerdtl">
      <div class="boxinnerdtl_inner">
        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="boxinnerdtl_img">
          <img src="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" />
        </div>
        <div class="boxinnerdtl_cnt">
          <h2>St Josephs Cemetery</h2>
          <address>3155 Barberry Ln, Sacramento, CA</address>
        </div>
      </div>
      <div class="boxinnerdtl_body">
        <div class="tfbx">
          <img src="{{ asset('newPublic/images/360lgicon.png') }}" alt="" />
          <span>360<sup>0</sup><br />Virtual Tour</span>
        </div>
        <div class="bodyrht">
          <p>Experience 360° views of New Orleans Catholic Cemeteries. St. Joseph Cemetery is one out of the six
            cemeteries…</p>
          <p><a href="#">Read More <i class="fa fa-chevron-down"></i></a></p>
          <ul class="ulshare">
            <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>
            <li><a href="#"><i class="far fa-heart"></i> Save</a></li>
          </ul>
        </div>
      </div>

      <div class="border p-3 mt-2">
        <h2 class="mheading pb-0 toverflow">Plots in <span>St. Josephs Cemetery</span></h2>
        <h4 class="shtxt mb-3">Showing 1 - 10 of 63</h4>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              
                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                  <i class="far fa-heart"></i>
                  <div class="boxinner_img">
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
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
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
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
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
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
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
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
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
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
                    <img src="http://127.0.0.1:8000/newPublic/images/cemlist-img1.jpg" alt="">
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
            </div>
          </div>

          <div class="col-12 plr-4">
              <nav aria-label="Page navigation  example" class="mt-3 mb-0">
                <ul class="pagination justify-content-end mb-2">
                  <li class="page-item">
                    <a class="page-link pn_arrow" href="#" aria-label="Previous">
                      <i class="fa fa-caret-left"></i>
                    </a>
                  </li>
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
</section>





<div class="video-popup">
  <div class="iframe-wrapper"><iframe width="500" height="300" src="" frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <span class="close-video"><i class="fa fa-times"></i></span>
  </div>
</div>

      @include('partials.outerDetailModal')


@endsection