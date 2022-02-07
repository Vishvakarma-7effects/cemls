<!-- <header class="hm_header">
  <div class="container-lg">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('newPublic/images/logo.png') }}" alt="Logo" />
      </a>
      

      <div class="navcollapse justify-content-end collapse  navbar-collapse" id="mnbar">
        <div class="tcell twcell">
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
        <div class="mmlist tcell" >
          <ul class="navbar-nav dtable">
            <li class="nav-item">
              <a class="nav-link" href="#">List your Property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sell Products</a>
            </li>
            
          </ul>
        </div>
        <div class="mnrht tcell">
          <ul class="nrht dtable">
            <li class="tcell msearch">
              <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseSearch"><i class="fa fa-search"></i></a>
            </li>
            <li class="">
              <a href="#">Sign in</a>
            </li>
            <li class="joinbx">
              <a href="#">Join</a>
            </li>
            <li class=""><a href="#"><span class="cartbx"><img src="{{ asset('newPublic/images/carticon.png') }}" /></span></a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
  </div>
</header> -->
<style>
  .hoverMenu:hover{
    color: #86c335  !important;

  }
</style>

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
