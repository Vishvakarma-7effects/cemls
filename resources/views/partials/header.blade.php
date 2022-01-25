<header class="adm_header">
    <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars"><path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z" class=""></path></svg>
    </button>
    <a class="navbar-brand" href="#">
        <img src="{{ asset('newPublic/images/logo.png') }}"  alt="Logo" />

        {{-- <img src="images/logo.png" alt="Logo" /> --}}
    </a>


    <div class="navcollapse justify-content-end collapse navbar-collapse" id="mnbar">
        <div class="tcell twcell">
        <form class="form-inline sform">
            <img src="{{ asset('newPublic/images/locicon.png') }}" class="locicon" />
            <input class="form-control" type="text" placeholder="Search" name="">
            <select class="form-control">
            <option>Products</option>
            </select>
            <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
        <div class="tcell mmlist">
        <ul class="navbar-nav dtable">
            <li class="nav-item tcell">
            <a class="nav-link" href="#">List your Property</a>
            </li>
            <li class="nav-item tcell">
            <a class="nav-link" href="#">Shop on CemLS<sup>&reg;</sup></a>
            </li>
            <li class="nav-item tcell">
            <a class="nav-link" href="#">Sell Products</a>
            </li>

        </ul>
        </div>
        <div class="tcell mnrht">
        <ul class="nrht dtable">
            <li class="tcell">
            <a href="#">
                <div class="nbx">
                    <i class="fas fa-bell"></i>
                    <span class="ncount">2</span>
                </div>
            </a>
            </li>
            <li class="nu_profile tcell">
                <div class="nu_pinner">
                <span class="usericon">
                    <img src="{{ asset('newPublic/images/user-img.png') }}" alt="" />
                </span>
                <span class="untxt">Jimmy</span>
                <i class="fa fa-caret-down"></i>
                </div>
                <ul class="nu_ullist">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </li>
            <li class="tcell"><a href="#"><span class="cartbx"><img src="{{ asset('newPublic/images/carticon.png') }}" /></span></a></li>
        </ul>
        </div>

    </div>
    </nav>
    <button class="d-none mmbar" type="button" data-toggle="collapse" data-target="#mnbar" aria-controls="mnbar" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </button>
</header>
