<header class="adm_header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars">
                <path fill="currentColor"
                    d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"
                    class=""></path>
            </svg>
        </button>
        <a class="navbar-brand" href="">
            <img src="{{ asset('newPublic/images/logo.png') }}" alt="Logo" />

            {{-- <img src="images/logo.png" alt="Logo" /> --}}
        </a>


        <div class="navcollapse justify-content-end collapse navbar-collapse" id="mnbar">
            {{-- <div class="tcell twcell">
                <form class="form-inline sform">
                    <img src="{{ asset('newPublic/images/locicon.png') }}" class="locicon" />
                    <input class="form-control" type="text" placeholder="Search" name="">
                    <select class="form-control">
                        <option>Products</option>
                    </select>
                    <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div> --}}
            <div class="tcell mmlist">
                {{-- <ul class="navbar-nav dtable">
                    <li class="nav-item tcell">
                        <a class="nav-link" href="#">List your Property</a>
                    </li>
                    <li class="nav-item tcell">
                        <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
                    </li>
                    <li class="nav-item tcell">
                        <a class="nav-link" href="#">Sell Products</a>
                    </li>

                </ul> --}}
            </div>
            <div class="tcell mnrht float-right">
                <ul class="nrht dtable">
                    {{-- <li class="tcell">
                        <a href="#">
                            <div class="nbx">
                                <i class="fas fa-bell"></i>
                                <span class="ncount">2</span>
                            </div>
                        </a>
                    </li> --}}

                    <li class="tcell">
                        <div class="dropdown">
                            <a href="#null" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <div class="nbx">
                                    <i class="fas fa-bell"></i>
                                    <span class="ncount">2</span>
                    
                                </div>
                            </a>
                            <div class="nbx_popup dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <h3 class="clearfix">Notifications <a href="#">Mark all as read</a></h3>
                                <div class="nbx_inner clearfix">
                                    <div class="nbx_lft">
                                        <h4>John</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                                    </div>
                                    <div class="nbx_rht">2 min ago</div>
                                </div>
                                <div class="nbx_inner clearfix">
                                    <div class="nbx_lft">
                                        <h4>John</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                                    </div>
                                    <div class="nbx_rht">2 min ago</div>
                                </div>
                                <div class="nbx_inner clearfix">
                                    <div class="nbx_lft">
                                        <h4>John</h4>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply</p>
                                    </div>
                                    <div class="nbx_rht">2 min ago</div>
                                </div>
                    
                            </div>
                        </div>
                    </li>

                    <li class="nu_profile tcell">
                        <div class="nu_pinner">
                            <span class="usericon">
                                <img src="{{ asset('newPublic/images/user-img.png') }}" alt="" />
                            </span>
                            <span class="untxt">{{ Auth::user()->name }}</span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                        <ul class="nu_ullist">
                            {{-- <li><a href="#">Profile</a></li>
                            <li><a href="#">Logout</a></li>  --}}
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> --}}

                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> --}}
                            </li>

                        </ul>
                    </li>
                    {{-- <li class="tcell"><a href="#"><span class="cartbx">
                        <img src="{{ asset('newPublic/images/carticon.png') }}" /></span></a>
                    </li> --}}
                </ul>
            </div>

        </div>
    </nav>
    <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </button>
</header>