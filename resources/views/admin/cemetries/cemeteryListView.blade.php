
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
              {{-- <a href="#" > --}}
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
              {{-- </a> --}}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              {{-- <a href="#"> --}}
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
              {{-- </a> --}}
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
              {{-- <a href="#"> --}}
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
              {{-- </a> --}}
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


      {{-- <div class="modal fade dtlpopup" id="mdtlModal"  role="dialog" aria-labelledby="searchModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mCustomScrollbar" role="document">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="clearfix pphead">
              <ul class="ulshare">
                <li><a href="#"><i class="far fa-heart"></i> Save</a></li>
                <li><a href="#"><i class="fa fa-share-alt"></i> Share</a></li>
              </ul>
              <div class="adbx">
                <img src="{{ asset('newPublic/images/adimg.jpg') }}">
              </div>
            </div>
            <div id="slider1_container"
              style="position: relative; top: 0px; left: 0px; width: 900px; height: 477px; background: #fff; overflow: hidden;">
              <div u="slides"
                style="cursor: move; position: absolute; left: 0px; top: 0px; width: 900px; height: 356px; overflow: hidden;">
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/01.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-01.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/02.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-02.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/03.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-03.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/04.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-04.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/05.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-05.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/06.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-06.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/07.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-07.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/08.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-08.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/09.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-09.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/10.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-10.jpg') }}" />
                </div>
      
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/11.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-11.jpg') }}" />
                </div>
                <div>
                  <img u="image" src="{{ asset('newPublic/images/slide/12.jpg') }}" />
                  <img u="thumb" src="{{ asset('newPublic/images/slide/thumb-12.jpg') }}" />
                </div>
              </div>
              <!-- Arrow Left -->
              <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
              </span>
              <!-- Arrow Right -->
              <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px"></span>
              <!-- thumbnail navigator container -->
              <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="cursor: default;">
                  <div u="prototype" class="p">
                    <div class=w>
                      <div u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class=c></div>
                  </div>
                </div>
                <!-- Thumbnail Item Skin End -->
              </div>
              <!--#endregion Thumbnail Navigator Skin End -->
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="ppinner">
                  <div class="mdtlp clearfix">
                    <div class="mdtlp_lft">
                      <h2 class="mdtlphead">St. Josephs Cemetery</h2>
                      <address>Sacramento CA</address>
                    </div>
                    <div class="mdtlp_rht">
                      <div class="pricebx"><bdi>Price</bdi><sup>$</sup> 3,000 <span>Onwards</span></div>
                    </div>
                  </div>
                  <p>Cemetery360® Software provides the industry a way to promote their business and offerings remotely,
                    during in-home presentations, and year-round, where weather conditions restrict in-person visits.
                    Cemetery360® Software captures ground view 360 imagery with our own capturing and recording equipment.</p>
                  <p><a href="#">Read More</a></p>
                  <div class="row">
                    <div class="col-6 fw-414">
                      <a href="#">
                        <div class="boxfour">
                          <h2 class="w-100">Order from CemLS and get free shipping</h2>
                          <img src="{{ asset('newPublic/images/pbtslide-img1.jpg') }}" class="boxfour_img" alt="">
                        </div>
                      </a>
                    </div>
      
                    <div class="col-6 fw-414">
                      <a href="#">
                        <div class="boxfour">
                          <h2 class="w-100">Order from CemLS and get free shipping</h2>
                          <img src="{{ asset('newPublic/images/pbtslide-img1.jpg') }}" class="boxfour_img" alt="">
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 pl-3 pl-lg-0">
                <div class="cntbx">Contact Cemetery</div>
                <div class="ppborder">
                  <div class="agentbx clearfix">
                    <div class="agentbx_img">
                      <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="">
                    </div>
                    <div class="agentcnt">
                      <h3>John Doe</h3>
                      <h4>
                        Sales Manager
                        <span class="d-block">(916) 870-4003</span>
                      </h4>
                    </div>
                  </div>
                  <div class="agentbx clearfix">
                    <div class="agentbx_img">
                      <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="">
                    </div>
                    <div class="agentcnt">
                      <h3>John Doe</h3>
                      <h4>
                        Sales Manager
                        <span class="d-block">(916) 870-4003</span>
                      </h4>
                    </div>
                  </div>
                  <div class="agentbx clearfix">
                    <div class="agentbx_img">
                      <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="">
                    </div>
                    <div class="agentcnt">
                      <h3>John Doe</h3>
                      <h4>
                        Sales Manager
                        <span class="d-block">(916) 870-4003</span>
                      </h4>
                    </div>
                  </div>
                  <div class="agentbx clearfix">
                    <div class="agentbx_img">
                      <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="">
                    </div>
                    <div class="agentcnt">
                      <h3>John Doe</h3>
                      <h4>
                        Sales Manager
                        <span class="d-block">(916) 870-4003</span>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      --}}
      <!-- Modal -->
      
      
      
      @include('partials.outerDetailModal')

@endsection
