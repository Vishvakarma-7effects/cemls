@extends('layouts.mainOuterApp')

@section('content')
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('newPublic/images/banner-img1.jpg') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('newPublic/images/banner-img1.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('newPublic/images/banner-img1.jpg') }}" alt="Third slide">
          </div>

          <div class="carousel-caption">
            <h3>Explore properties in your area</h3>
            <form class="sform clearfix" action="{{ url('cemetery/cemeteryListView')}}" method="GET">
              <img src="{{ asset('newPublic/images/locicon.png') }}" class="locicon">
              <input class="form-control" type="text" placeholder="Enter an address, locality or ZIP code" name="">
              <button class="btn_search" type="submit" data-toggle="modal" data-target="#searchModal"><span>Search</span> <i class="fa fa-search"></i></button>
            </form>

            
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <i class="fa fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <i class="fa fa-chevron-right"></i>
        </a>
      </div>

      <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Properties near you <a href="{{ url('cemetery/cemeteryListView')}}" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>

            <div class="owl-carousel owl-theme" id="prop_slide">
              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg') }}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg') }}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg') }}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg')}}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg')}}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png')}}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg') }}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        {{-- <i class="far fa-heart"></i> --}}
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/img1.jpg') }}" alt=""/>
                      </div>
                      <div class="text-right bxicon"><img src="{{ asset('newPublic/images/360icon.png') }}" /></div>
                      <div class="bxsec">Section: Veteran</div>
                      <h2 class="bxhead">Arbor Memorial Glen Oaks Cemetery</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA</address>
                      <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
            </div>
        </div>
      </section>

      {{-- <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Shop on CemLS<sup>®</sup> <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>
            <div class="row">
              <div class="col-lg-2 dcol">
                  <a href="#">
                    <div class="boxtwo">                    
                      <div class="boxtwo_img">
                        <img src="{{ asset('newPublic/images/shop-img1.jpg') }}" alt="" />
                      </div>
                      <h2>Flowers</h2>
                    </div>
                  </a>
              </div>

              <div class="col-lg-2 dcol">
                  <a href="#">
                    <div class="boxtwo">                    
                      <div class="boxtwo_img">
                        <img src="{{ asset('newPublic/images/shop-img1.jpg') }}" alt="" />
                      </div>
                      <h2>Flowers</h2>
                    </div>
                  </a>
              </div>

              <div class="col-lg-2 dcol">
                  <a href="#">
                    <div class="boxtwo">                    
                      <div class="boxtwo_img">
                        <img src="{{ asset('newPublic/images/shop-img1.jpg') }}" alt="" />
                      </div>
                      <h2>Flowers</h2>
                    </div>
                  </a>
              </div>

              <div class="col-lg-2 dcol">
                  <a href="#">
                    <div class="boxtwo">                    
                      <div class="boxtwo_img">
                        <img src="{{ asset('newPublic/images/shop-img1.jpg') }}" alt="" />
                      </div>
                      <h2>Flowers</h2>
                    </div>
                  </a>
              </div>

              <div class="col-lg-2 dcol">
                  <a href="#">
                    <div class="boxtwo">                    
                      <div class="boxtwo_img">
                        <img src="{{ asset('newPublic/images/shop-img1.jpg') }}" alt="" />
                      </div>
                      <h2>Flowers</h2>
                    </div>
                  </a>
              </div>
            </div>
        </div>
      </section>

      <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Featured Facilities <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>

            <div class="owl-carousel owl-theme" id="feat_slide">
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                      <div class="bxtag clearfix">
                        <i class="far fa-heart"></i>
                      </div>
                      <div class="bximg">
                        <img src="{{ asset('newPublic/images/feat-img1.jpg') }}" alt=""/>
                      </div>
                      <h2 class="bxhead pt-2 toverflow">Rozet Chapel</h2>
                      <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                        <span class="d-block">Seats: 600</span>
                      </address>
                      <div class="bxprice"><sup>$</sup> 200 <span>per day</span></div>
                  </div>
                </a>
              </div>

            </div>
        </div>
      </section>

      <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Services <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>
            <div class="row">
              <div class="col-lg-2 dcol">
                <a href="#">
                  <div class="boxtwo">
                    <div class="boxtwo_img">
                      <img src="{{ asset('newPublic/images/serv-img1.jpg') }}" alt="" />
                    </div>
                    <h2>Funeral</h2>
                  </div>
                </a>
              </div>

              <div class="col-lg-2 dcol">
                <a href="#">
                  <div class="boxtwo">
                    <div class="boxtwo_img">
                      <img src="{{ asset('newPublic/images/serv-img1.jpg') }}" alt="" />
                    </div>
                    <h2>Funeral</h2>
                  </div>
                </a>
              </div>

              <div class="col-lg-2 dcol">
                <a href="#">
                  <div class="boxtwo">
                    <div class="boxtwo_img">
                      <img src="{{ asset('newPublic/images/serv-img1.jpg') }}" alt="" />
                    </div>
                    <h2>Funeral</h2>
                  </div>
                </a>
              </div>

              <div class="col-lg-2 dcol">
                <a href="#">
                  <div class="boxtwo">
                    <div class="boxtwo_img">
                      <img src="{{ asset('newPublic/images/serv-img1.jpg') }}" alt="" />
                    </div>
                    <h2>Funeral</h2>
                  </div>
                </a>
              </div>

              <div class="col-lg-2 dcol">
                <a href="#">
                  <div class="boxtwo">
                    <div class="boxtwo_img">
                      <img src="{{ asset('newPublic/images/serv-img1.jpg') }}" alt="" />
                    </div>
                    <h2>Funeral</h2>
                  </div>
                </a>
              </div>
            </div>
        </div>
      </section>

      <section class="samebx">
        <div class="container-lg">
          <div class="row">
            <div class="col-lg-4">
              <a href="#">
                <div class="boxthree clearfix">
                  <div class="boxthree_cnt">
                    <h2>Sell on CemLS<sup>®</sup></h2>
                    <p>5 Sellers in <br/>your area</p>
                  </div>
                  <div class="boxthree_img">
                    <img src="{{ asset('newPublic/images/bximg1.jpg')}}" alt="" />
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="#">
                <div class="boxthree clearfix">
                  <div class="boxthree_cnt">
                    <h2>List your Cemetery with us</h2>
                    <p>8 cemeteries <br/>listed this month</p>
                  </div>
                  <div class="boxthree_img">
                    <img src="{{ asset('newPublic/images/bximg2.jpg')}}" alt="" />
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="#">
                <div class="boxthree clearfix">
                  <div class="boxthree_cnt">
                    <h2>Offer services on this platforms</h2>
                    <p>14 services <br/>offered nearby</p>
                  </div>
                  <div class="boxthree_img">
                    <img src="{{ asset('newPublic/images/bximg3.jpg')}}" alt="" />
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Top Selling Products <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>

            <div class="owl-carousel owl-theme" id="selling_slide">
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone ">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg border">
                      <img src="{{ asset('newPublic/images/selling-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2">Individual Bronze Grave Markers</h2>
                    <div class="bxprice"><sup>$</sup> 899.25</div>
                  </div>
                </a>
              </div>

            </div>
        </div>
      </section> --}}

      {{-- <section class="samebx bg_grey">
        <div class="container-lg">
          <div class="planbx">
            <h2 class="w-100">Funeral Insurance Plans</h2>
            <p class="w-100">Our Funeral Insurance provides your family with a lump sum payment to help pay for funeral and associated expenses. It only takes a few minutes to buy online and once approved your cover starts immediately.</p>
            <div class="w-100"><button class="btn_mid btn_green">Buy Funeral Insurance</button></div>
            <img src="{{ asset('newPublic/images/plan-img.jpg')}}" class="planbx_img" />
          </div>
        </div>
      </section> --}}

      {{-- <section class="samebx">
        <div class="container-lg">
            <h2 class="mheading clearfix">Top Services <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>

            <div class="owl-carousel owl-theme" id="services_slide">
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>
              <div class="item wow zoomIn">
                <a href="#null">
                  <div class="boxone">
                    <div class="bxtag clearfix">
                      <i class="far fa-heart"></i>
                    </div>
                    <div class="bximg">
                      <img src="{{ asset('newPublic/images/ser-img1.jpg') }}" alt=""/>
                    </div>
                    <h2 class="bxhead pt-2 toverflow">Grave Stone Cleaning</h2>
                    <address class="bxaddress">3155 Barberry Ln, Sacramento, CA
                    </address>
                    <div class="bxprice"><sup>$</sup> 80.00 <span>Onwards</span></div>
                  </div>
                </a>
              </div>

            </div>
        </div>
      </section> --}}

      {{-- <section class="samebx bg_grey border-bottom-0">
        <div class="container-lg">
            <div class="owl-carousel owl-theme" id="bottom_slide">
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxfour">
                    <h2 class="w-100">Order from CemLS and get free shipping</h2>
                    <img src="{{ asset('newPublic/images/btslide-img1.jpg') }}" class="boxfour_img" alt="" />
                  </div>
                </a>
              </div>

            </div>
        </div>
      </section> --}}

     
      {{-- @section('script') --}}

      @include('partials.outerDetailModal')
      @endsection

      @section('scripts')

      <script>
        //   jQuery(document).ready(function ($) {

        //     var _SlideshowTransitions = [
        //     //Fade in L
        //         {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade out R
        //         , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade in R
        //         , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade out L
        //         , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

        //     //Fade in T
        //         , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade out B
        //         , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade in B
        //         , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade out T
        //         , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

        //     //Fade in LR
        //         , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade out LR
        //         , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade in TB
        //         , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade out TB
        //         , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

        //     //Fade in LR Chess
        //         , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade out LR Chess
        //         , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade in TB Chess
        //         , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade out TB Chess
        //         , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

        //     //Fade in Corners
        //         , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
        //     //Fade out Corners
        //         , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

        //     //Fade Clip in H
        //         , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade Clip out H
        //         , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade Clip in V
        //         , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //     //Fade Clip out V
        //         , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        //         ];

        //     var options = {
        //         $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        //         $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        //         $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        //         $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        //         $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        //         $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

        //         $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
        //             $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
        //             $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
        //             $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
        //             $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
        //         },

        //         $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
        //             $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
        //             $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
        //         },

        //         $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
        //             $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
        //             $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

        //             $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
        //             $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
        //             $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
        //             $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
        //         }
        //     };

        //     var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        //     //responsive code begin
        //     //you can remove responsive code if you don't want the slider scales while window resizes
        //     function ScaleSlider() {
        //         var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
        //         if (parentWidth)
        //             jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 900), 300));
        //         else
        //             window.setTimeout(ScaleSlider, 30);
        //     }
        //     ScaleSlider();

        //     $(window).bind("load", ScaleSlider);
        //     $(window).bind("resize", ScaleSlider);
        //     $(window).bind("orientationchange", ScaleSlider);
        //     //responsive code end
        // });

      // $('.owl-item).click(function(){
      //   $('#mdtlModal').modal('toggle');

      // })

       $('.owl-item').click(function(){
          debugger
              $('#mdtlModal').modal('toggle');
        })
        </script>

          
      @endsection

    
        

    