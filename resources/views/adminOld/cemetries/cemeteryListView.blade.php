
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
      
      
      
      @include('layouts.OuterDetailModal')

@endsection
@section('scripts')

{{-- <script>
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
</script> --}}


@endsection
