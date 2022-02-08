<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <title>CemLS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />

  <script src="{{ asset('newPublic/js/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="{{ asset('newPublic/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('newPublic/js/owl.carousel.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('newPublic/css/bootstrap.min.css') }}" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('newPublic/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('newPublic/css/styleab.css') }}" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="{{ asset('newPublic/images/favicon.ico') }}" type="image/x-icon" />

</head>

<body>
<style>
  .hoverMenu:hover{
    color: #86c335  !important;

  }
</style>

  

  {{-- <header class="hm_header">
    <div class="container-lg">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('newPublic/images/logo.png') }}" alt="Logo" />
        </a>


        <div class="navcollapse justify-content-end collapse  navbar-collapse" id="mnbar">
          <div class="tcell twcell float-right">
            <form class="form-inline hsform" id="collapseSearch">

              <img src="{{ asset('newPublic/images/locicon1.png') }}" class="locicon">
              <input class="form-control" type="text" placeholder="Search" name="">
              <select class="form-control">
                <option>Cemeteries</option>
                <option>Facilities</option>
                <option>Products</option>
                <option>Services</option>
              </select>
              <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="mmlist tcell">
            <ul class="navbar-nav dtable">
              <li class="nav-item">
                <a class="nav-link" href="#">List your Property</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sell Products</a>
              </li> -->

            </ul>
          </div>
          <div class="mnrht tcell">
            <ul class="nrht dtable">
              <li class="tcell msearch">
                <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false"
                  aria-controls="collapseSearch"><i class="fa fa-search"></i></a>
              </li>
              <!-- <li class="">
                <a href="#">Sign in</a>
              </li> -->
              <li class="joinbx float-right">
                <a href="{{ route('login') }}">Sign in</a>
              </li>
              <!-- <li class=""><a href="#"><span class="cartbx"><img
                      src="{{ asset('newPublic/images/carticon.png') }}" /></span></a></li> -->
            </ul>
          </div>

        </div>
      </nav>
      <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
    </div>
  </header> --}}

   <header class="hm_header">
    <div class="container-lg">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('newPublic/images/logo.png') }}" alt="Logo" />
        </a>
          <div class="tcell twcell float-right">
            <form class="form-inline hsform" id="collapseSearch" style="width: 227px;">

              <img src="{{ asset('newPublic/images/locicon1.png') }}" class="locicon">
              <input class="form-control" type="text" placeholder="Search" name="">
              {{-- <select class="form-control"> --}}
                {{-- <option>Cemeteries</option> --}}
                {{-- <option>Facilities</option>
                <option>Products</option>
                <option>Services</option> --}}
              {{-- </select> --}}
              <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>

        <div class="navcollapse justify-content-end collapse  navbar-collapse" id="mnbar">
          
          
          <div class="mmlist tcell float-right">
            <ul class="navbar-nav dtable">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">List your Property</a>
              </li> --}}
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sell Products</a>
              </li> -->

            </ul>
          </div>
          <div class="mnrht tcell">
            <ul class="nrht dtable">
              {{-- <li class="tcell msearch">
                <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false"
                  aria-controls="collapseSearch"><i class="fa fa-search"></i></a>
              </li> --}}

              <li class="nav-item">
                <a class="nav-link hoverMenu" href="#">List your Property</a>
              </li>
              
              <!-- <li class="">
                <a href="#">Sign in</a>
              </li> -->
              <li class="joinbx float-right">
                <a href="{{ route('login') }}">Sign in</a>
              </li>
              <!-- <li class=""><a href="#"><span class="cartbx"><img
                      src="{{ asset('newPublic/images/carticon.png') }}" /></span></a></li> -->
            </ul>
          </div>

        </div>
      </nav>
      <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
    </div>
  </header>

  <section class="inner_pages signbx clearfix">
    <div class="container-lg ">
      <h2 class="mheading pb-0 pl-2 toverflow">Welcome to <span>CemLS<sup>®</sup></span></h2>
      {{-- <h4>Buy or sell cemetery properties, products<br />and services in your area!</h4> --}}
      <!-- <ul class="nav nav-tabs mb-2 mb-mb-3 pb-1" id="welTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin"
            aria-selected="true">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register"
            aria-selected="false">New Account</a>
        </li>
      </ul> -->

      <form class="welform" method="post" action="{{ route('login') }}">
        @csrf
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
            <h2>Sign in to your account</h2>
            <div class="mb-2 mb-mb-3 pb-1">

              <input id="email" placeholder="Email" type="email"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-2 mb-mb-3">
              <input id="password" placeholder="Password" type="password"
                class="form-control @error('password') is-invalid @enderror" name="password" required
                autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              {{-- <input type="text" class="form_control" name="password" placeholder="Password" /> --}}
            </div>
            <div class="mb-3 mb-mb-4 pb-1">
              <button type="submit" class="btn_mid btn_green px-5 mt-2">Sign In</button>
              <!-- <a href="#" class="flink">Forgot Password?</a> -->
            </div>
            <!-- <div class="slogin">
                <div class="row">
                  <div class="col-lg-6 col-6 plr8">
                    <a class="slbx fsign" href="#"><i class="fab fa-facebook-f"></i> <span>Sign in <bdi>with
                          Facebook</bdi></span></a>
                  </div>
                  <div class="col-lg-6 col-6 plr8">
                    <a class="slbx gplus" href="#"><i class="fab fa-google"></i> <span>Sign in <bdi>with
                          Google</bdi></span></a>
                  </div>
                </div>
              </div> -->
          </div>
        
      </form>

        
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
              <form class="" action="{{ route('register') }}">
                @csrf
              <h2>Create new account</h2>
              <div class="row">
                <div class="col-md-6 mb-2 mb-mb-3 pb-1 plr8">
                  <input type="email" class="form_control" name="" placeholder="First Name" />
                </div>

                <div class="col-md-6 mb-2 mb-mb-3 pb-1 plr8">
                  <input type="email" class="form_control" name="" placeholder="Last Name" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-2 mb-mb-3 pb-1 plr8">
                  <input type="email" class="form_control" name="" placeholder="Email" />
                </div>

                <div class="col-md-6 mb-2 mb-mb-3 pb-1 plr8">
                  <input type="email" class="form_control" name="" placeholder="Password" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-2 mb-mb-3 pb-1 plr8">
                  <input type="email" class="form_control" name="" placeholder="Phone" />
                </div>
              </div>
              <div class="mb-2">
                <div class="mycheck">
                  <input type="checkbox" id="chkbx1" name="chkbx1">
                  <label for="chkbx1">I accept <b>CemLS<sup>®</sup></b> <a>Terms of Use</a></label>
                </div>
              </div>
              <div class="mb-3 mb-mb-4 pb-1">
                <button type="button" class="btn_mid btn_green px-5 mt-2">Join</button>
              </div>
              </form>
            </div>

        </div>

       

    </div>
  </section>

    <footer class="adm_footer">
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
                            {{-- <li><a href="#">Partner With Us</a></li>
                            <li><a href="#">360 Services</a></li>
                            <li><a href="#">Business Opportunity</a></li> --}}
                        </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h2 class="ft_head">For Cemeteries</h2>
                        <ul class="ftlinks">
                            <li><a href="{{ url('cemeterys')}}">List Cemetery</a></li>
                            <li><a href="#">Look Leads</a></li>
                            {{-- <li><a href="#">Add Agents</a></li>
                            <li><a href="#">FAQ</a></li> --}}
                        </ul>
                        </div>

                        {{-- <div class="col-lg-4 col-md-4 col-sm-4"> --}}
                        {{-- <h2 class="ft_head">For Sellers</h2>
                        <ul class="ftlinks">
                            <li><a href="#">List Products</a></li>
                            <li><a href="#">List Services</a></li>
                            <li><a href="#">List Facilities</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Low on Commissions</a></li>
                        </ul> --}}
                        {{-- </div> --}}
                    </div>
                </div>


                </div>

                <div class="ftbbx">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                    <ul class="ft_qlink">
                        <li>© 2018 Cemetery360</li>
                        <li><a href="#">Terms & Conditions</a></li>
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

  <!-- Modal -->
  <div class="modal fade smodal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div id="searchcarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="protab">
                <div class="protabinner active"><span class="protabcircle"></span></div>
                <div class="protabinner"><span class="protabcircle"></span></div>
                <div class="protabinner"><span class="protabcircle"></span></div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="pt-2">I am looking for..</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                  <div class="cirserv active">
                    <div class="cirserv_img">
                      <span><img src="{{ asset('newPublic/images/popupicon1.png') }}" /></span>
                    </div>
                    <h3>Cemeteries</h3>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                  <div class="cirserv">
                    <div class="cirserv_img">
                      <span><img src="{{ asset('newPublic/images/popupicon2.png') }}" /></span>
                    </div>
                    <h3>Facilities</h3>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                  <div class="cirserv">
                    <div class="cirserv_img">
                      <span><img src="{{ asset('newPublic/images/popupicon3.png') }}" /></span>
                    </div>
                    <h3>Products</h3>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-6">
                  <div class="cirserv">
                    <div class="cirserv_img">
                      <span><img src="{{ asset('newPublic/images/popupicon4.png') }}" /></span>
                    </div>
                    <h3>Services</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="protab">
                <div class="protabinner filled"><span class="protabcircle"></span></div>
                <div class="protabinner active"><span class="protabcircle"></span></div>
                <div class="protabinner"><span class="protabcircle"></span></div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="pt-2">What type of property do you prefer?..</h2>
                  <ul class="typeul">
                    <li>
                      <div class="myradio d-inline-block">
                        <input type="radio" id="rdbx1" name="prefer" checked>
                        <label for="rdbx1">Burial</label>
                      </div>
                    </li>
                    <li>
                      <div class="myradio d-inline-block">
                        <input type="radio" id="rdbx2" name="prefer">
                        <label for="rdbx2">Cremation</label>
                      </div>
                    </li>
                  </ul>

                  <div class="pnbx">
                    <a href="#" class="linktxt">Skip this step <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="protab">
                <div class="protabinner filled"><span class="protabcircle"></span></div>
                <div class="protabinner filled"><span class="protabcircle"></span></div>
                <div class="protabinner active"><span class="protabcircle"></span></div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="pt-2">Select the price Range</h2>
                  <h3 class="srprice">Price</h3>
                  <div slider id="slider-distance">
                    <div>
                      <div inverse-left style="width:70%;"></div>
                      <div inverse-right style="width:70%;"></div>
                      <div range style="left:0%;right:70%;"></div>
                      <span thumb style="left:0%;"></span>
                      <span thumb style="left:30%;"></span>
                      <div sign style="left:0%;">
                        <span id="value">0</span>
                      </div>
                      <div sign style="left:30%;">
                        <span id="value">30</span>
                      </div>
                      <div class="dprice clearfix">
                        <span class="dplft">0</span>
                        <span class="dprht">100</span>
                      </div>
                    </div>
                    <input type="range" tabindex="0" value="0" max="100" min="0" step="1" oninput="
                      this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                      var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                      var children = this.parentNode.childNodes[1].childNodes;
                      children[1].style.width=value+'%';
                      children[5].style.left=value+'%';
                      children[7].style.left=value+'%';children[11].style.left=value+'%';
                      children[11].childNodes[1].innerHTML=this.value;" />

                    <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                      this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                      var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                      var children = this.parentNode.childNodes[1].childNodes;
                      children[3].style.width=(100-value)+'%';
                      children[5].style.right=(100-value)+'%';
                      children[9].style.left=value+'%';children[13].style.left=value+'%';
                      children[13].childNodes[1].innerHTML=this.value;" />
                  </div>

                  <div class="pnbx">
                    <a href="#" class="linktxt">Skip this step <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev disabled" href="#searchcarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
          </a>
          <a class="carousel-control-next" href="#searchcarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="video-popup">
    <div class="iframe-wrapper"><iframe width="500" height="300" src="" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <span class="close-video"><i class="fa fa-times"></i></span>
    </div>
  </div>

  @section('scripts')
  <script src="{{ asset('newPublic/js/custom.js') }}"></script>
  <script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
  </script>
  @endsection

</body>

</html>