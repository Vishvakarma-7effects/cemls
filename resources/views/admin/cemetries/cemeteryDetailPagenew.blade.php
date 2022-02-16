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
      width="600" height="450" style="border:0;"  allowfullscreen="" loading="lazy"></iframe>
    <a class="btn btn-primary mflistbtn">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  <div class="innercnt pt-3" style="overflow-x: hidden;overflow-y: auto;">

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
      <!--<div class="boxinnerdtl_inner">
        <a href="{{ url('cemetery/cemeteryListView') }}"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="boxinnerdtl_img1">
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
 -->
      <div class="border p-3 mt-2">
        <h2 class="mheading pb-0 toverflow">Plots in <span>St. Josephs Cemetery</span></h2>
        <h4 class="shtxt mb-3">Showing 1 - 10 of 63</h4>
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-6 plr-4">
                                                          <a data-target="#mdtlModal" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#mdtlModal">

                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
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
                            <a  href="{{ url('cemetery/cemls') }}">

                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img ">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
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
                                                                                                               <a  href="{{ url('cemetery/cemls') }}">


                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
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
                                                                                                                               <a  href="{{ url('cemetery/cemls') }}">


                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
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
                                                                                                            <a  href="{{ url('cemetery/cemls') }}">


                <div class="boxinner"> 
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
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
                                                                                                   <a  href="{{ url('cemetery/cemls') }}">


                <div class="boxinner">
                  <span class="tagtxt">Outdoor</span>
                 <!--<i class="far fa-heart"></i>-->
                  <div class="boxinner_img">
                    <img src="{{ asset('newPublic/images/cemlist-img1.jpg') }}" alt="">
                  </div>
                  <div class="boxinnercnt">
                    <h2 class="bxhead mt-0">Arbor Memorial Glen Oaks Cemetery</h2>
                    <address class="bxaddress mb-0">3155 Barberry Ln, Sacramento, CA</address>
                  </div>
                  <div class="bxprice"><sup>$</sup> 3249 <span>Onwards</span></div>
                </div>
                
                </a>
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



<div class="ftbbx">

        <!--  <footer class="adm_footer">
            <div class="container-lg">
                <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="ftabt">
                    <h2 class="ft_head">About CemLS<sup>®</sup></h2>
                    <p class="ftpara"><span>CemLS<sup>®</sup></span> is a cemetery property Listing service, enabling you to showcase all your available property from your administrative location or remotely with a smartphone or tablet.</p>
                    </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">Quick Navigation</h2>
                        <ul class="ftlinks">
                            <li><a href="{{ url('aboutUs') }}">About Us</a></li>
                            <li><a href="{{ url('contactUs') }}">Contact Us</a></li>
                            
                        </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="{{ url('cemeteries') }}">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            
                        </ul>
                        </div>

                        
                        
                        
                    </div>
                </div>


                </div>

                <div class="ftbbx">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                    <ul class="ft_qlink">
                        <li>© 2018 Cemetery360</li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Helpdesk</a></li>
                    </ul>
                    <ul class="ftinfo">
                        <li><i class="fa fa-phone"></i> <a href="tel:(916) 330-4126">(916) 330-4126</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                    <ul class="ftsocial">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </footer>

       -->
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
<!--<footer class="adm_footer">
            <div class="container-lg">
                <div class="row pt-md-5" align="right">
                <div class="col-lg-12 col-12">
                    <div class="ftabt">
                    <h2 class="ft_head">About CemLS<sup>®</sup></h2>
                    <p class="ftpara col-sm-6"><span>CemLS<sup>®</sup></span> is a cemetery property Listing service, enabling you to showcase all your available property from your administrative location or remotely with a smartphone or tablet.</p>
                    </div>
                </div>

                   <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="ft_head">Quick Navigation</h2>
                        <ul class="ftlinks">
                            <li><a href="https://new.cemeterylistingservice.com/aboutUs">About Us</a></li>
                            <li><a href="https://new.cemeterylistingservice.com/contactUs">Contact Us</a></li>
                            
                        </ul>
                        </div>

                              <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="https://new.cemeterylistingservice.com/cemeterys">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            
                        </ul>
                        </div>

                


                </div>

                <div class="ftbbx">
                <div class="row" align="right">
                    <div class="col-lg-12 col-md-12">
                    <ul class="ft_qlink">
                        <li>© 2018 Cemetery360</li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Helpdesk</a></li>
                    </ul>
                
                
                    </div>

                         <div class="col-12 pt-3"> 
                       <ul class="ftinfo">
                        <li><i class="fa fa-phone"></i> <a href="tel:(916) 330-4126">(916) 330-4126</a></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@cemls.com">info@cemls.com</a></li>
                        
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>

                        
                

                    </div>
                   <div class="col-12 pt-3"> 
                           
                    </div>

                 

                
                </div>


                </div>
            </div>
        </footer>-->

@endsection