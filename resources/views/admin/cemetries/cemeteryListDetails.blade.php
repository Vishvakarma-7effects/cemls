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
        <div class="">
          <div class="row diffbx">
            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="plotbxdinner">
            <div class="arrow-up"></div>
            <div class="pbx_head">
              <h2>Location ID: <span>CemLS#42824</span></h2>
              <h4>Outdoor, Bural</h4>
            </div>
            <ul class="pbxul">
              <li>Garden: <b>St. Peters</b></li>
              <li>
                Section: <b>Southpark</b></li>
              <li>
                Lot: <b>10</b></li>
              <li>
                Row: <b>7</b></li>
              <li>
                Grave: <b>2</b></li>
            </ul>
            <div class="pbx_price clearfix">
              <div class="pbx_lft">
                <div class="availbx"><i class="fa fa-circle-check"></i> Available</div>
                <div class="pricebx"><sup>$</sup> 3,000 <span>Onwards</span></div>
              </div>
              <div class="pbx_rht">
                <h5>Contact Agent</h5>
                <div class="abx clearfix">
                  <div class="abx_img">
                    <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="" />
                  </div>
                  <div class="abx_cnt">
                    <div class="abxname">Andew Blan</div>
                    <div class="abxinfo">Sales Manager<span class="d-block">(916) 870-4003</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pbx_btn">
              <button type="button" class="btn_mid btn_green" data-toggle="modal" data-target="#mdtlModal">View More
                Details</button>
            </div>
          </div>

          <div class="row diffbx">
            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 plr-4">
              <a href="#">
                <div class="plotbx clearfix">
                  <div class="plot_img">
                    <img src="{{ asset('newPublic/images/plot-img1.jpg') }}" alt="" />
                  </div>
                  <div class="plot_cnt">
                    <h3>CemLS#30543</h3>
                    <h4>Section: Veteran</h4>
                    <div class="pprice"><b>$4,000</b> Onwards</div>
                  </div>
                </div>
              </a>
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
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                Contact Agent <i class="fa fa-chevron-up"></i>
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="owl-carousel owl-theme" id="agent_slide">
              <div class="item wow zoomIn">
                <div class="agentbx clearfix">
                  <div class="agentbx_img">
                    <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="" />
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
                    <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="" />
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

              <div class="item wow zoomIn">
                <div class="agentbx clearfix">
                  <div class="agentbx_img">
                    <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="" />
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
                    <img src="{{ asset('newPublic/images/agent-img1.png') }}" alt="" />
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

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                Photos <i class="fa fa-chevron-up"></i>
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse pb-4 html-code grid-of-images" aria-labelledby="headingTwo"
            data-parent="#accordion">

            <div class="owl-carousel owl-theme pad55 popup-gallery " id="photo_slide">
              <div class="item">
                <a href="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" alt="" />
                </a>

                <a href="{{ asset('newPublic/images/photo-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/photo-img1.jpg') }}" alt="" />
                </a>
              </div>

              <div class="item">
                <a href="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" alt="" />
                </a>

                <a href="{{ asset('newPublic/images/photo-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/photo-img1.jpg') }}" alt="" />
                </a>
              </div>

              <div class="item">
                <a href="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" alt="" />
                </a>

                <a href="{{ asset('newPublic/images/photo-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/photo-img1.jpg') }}" alt="" />
                </a>
              </div>

              <div class="item">
                <a href="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/cemlistd-img1.jpg') }}" alt="" />
                </a>

                <a href="{{ asset('newPublic/images/photo-img1.jpg') }}" class="photobx">
                  <img src="{{ asset('newPublic/images/photo-img1.jpg') }}" alt="" />
                </a>
              </div>
            </div>

          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                Videos <i class="fa fa-chevron-up"></i>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse pb-4 vid-slider" aria-labelledby="headingThree"
            data-parent="#accordion">
            <div class="owl-carousel owl-theme pad55 vid-wrapper" id="video_slide">
              <div class="item">
                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/r17o4a7kTCE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>

                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q0EnvRGlVFc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>

              <div class="item">
                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/r17o4a7kTCE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>

                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q0EnvRGlVFc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>

              <div class="item">
                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/r17o4a7kTCE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>

                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q0EnvRGlVFc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>

              <div class="item">
                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/r17o4a7kTCE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>

                <div class="popup-youtube vid videobx">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q0EnvRGlVFc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="false" aria-controls="collapseFour">
                Products <i class="fa fa-chevron-up"></i>
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse pb-3 vid-slider" aria-labelledby="headingFour"
            data-parent="#accordion">
            <div class="owl-carousel owl-theme pad55 vid-wrapper" id="prod_slide">
              <div class="item">
                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>

                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>

                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>

                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>

                <a href="#" class="d-block">
                  <div class="boxone ">
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead ">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                aria-expanded="false" aria-controls="collapseFive">
                Services <i class="fa fa-chevron-up"></i>
              </button>
            </h5>
          </div>
          <div id="collapseFive" class="collapse pb-3 vid-slider" aria-labelledby="headingFive"
            data-parent="#accordion">
            <div class="owl-carousel owl-theme pad55 vid-wrapper" id="serva_slide">
              <div class="item">
                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>

                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>

                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>

                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item">
                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>

                <a href="#null" class="d-block">
                  <div class="boxone">
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt="">
                    </div>
                    <h2 class="bxhead toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
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

<!-- Modal -->
<div class="modal fade dtlpopup" id="mdtlModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
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

@section('script')
<script>
  jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 900), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>
@endsection

@endsection