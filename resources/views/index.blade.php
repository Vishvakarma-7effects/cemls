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
            <h3>Explore properties, <br/>products and services in your area</h3>
            <form class="sform clearfix">
              <img src="{{ asset('newPublic/images/locicon.png') }}" class="locicon">
              <input class="form-control" type="text" placeholder="Enter an address, locality or ZIP code" name="">
              <button class="btn_search" type="button" data-toggle="modal" data-target="#searchModal"><span>Search</span> <i class="fa fa-search"></i></button>
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
            <h2 class="mheading clearfix">Properties near you <a href="#" class="vall_link">View All <i class="fa fa-chevron-right"></i></a></h2>

            <div class="owl-carousel owl-theme" id="prop_slide">
              <div class="item wow zoomIn">
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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
                <a href="#">
                  <div class="boxone bxhght">
                      <div class="bxtag clearfix">
                        <span class="tagtxt">Outdoor</span>
                        <i class="far fa-heart"></i>
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

      <section class="samebx">
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
      </section>

      <section class="samebx bg_grey">
        <div class="container-lg">
          <div class="planbx">
            <h2 class="w-100">Funeral Insurance Plans</h2>
            <p class="w-100">Our Funeral Insurance provides your family with a lump sum payment to help pay for funeral and associated expenses. It only takes a few minutes to buy online and once approved your cover starts immediately.</p>
            <div class="w-100"><button class="btn_mid btn_green">Buy Funeral Insurance</button></div>
            <img src="{{ asset('newPublic/images/plan-img.jpg')}}" class="planbx_img" />
          </div>
        </div>
      </section>

      <section class="samebx">
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
      </section>

      <section class="samebx bg_grey border-bottom-0">
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
      </section>

     
      {{-- @section('script') --}}

      {{-- @include('partials.mainOuterfooter') --}}
      @endsection
      

    
        

    