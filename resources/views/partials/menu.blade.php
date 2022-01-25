<aside class="asidelft">
  <ul>
    <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon1.png') }}"></span> <bdi>Dashboard</bdi></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span><img src="{{ asset('newPublic/images/lfticon2.png') }}"></span>
        <bdi>Property</bdi></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('cemeterys/getAddMember') }}">
          <span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
          <bdi>Add Cemetery Member</bdi>
        </a>
        <a class="dropdown-item " href="{{ url('cemeterys') }}"><span>
          <img src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
          <bdi>Cemetery</bdi></a>
        <a class="dropdown-item" href="{{ url('cemeterys/create') }}">
          <span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
          <bdi>Add Cemetery</bdi>
        </a>
        <a class="dropdown-item" href="{{ url('plots') }}"><span><img src="{{ asset('newPublic/images/lfticon16.png') }}"></span>
          <bdi>Plots</bdi></a>
        <a class="dropdown-item" href="{{ url('plots/create') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span> <bdi>Add
            Plots</bdi></a>
        <a class="dropdown-item" href="{{ url('plots/customeNew') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span>
          <bdi>Add Custome Plots</bdi></a>

      </div>
    </li>
    <!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon3.png') }}" ></span> <bdi>Products</bdi></a></li> -->
    <!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon4.png') }}" ></span> <bdi>Services</bdi></a></li>
  <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon5.png') }}" ></span> <bdi>Orders</bdi></a></li>
  <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon6.png') }}" ></span> <bdi>Payments</bdi></a></li> -->
    <li>
      <a href="#">
        <span><img src="{{ asset('newPublic/images/lfticon7.png') }}"></span>
        <bdi>Communication</bdi>
      </a>
    </li>
    <li><a href="{{ url('cemeterys/dataSync') }}"><span>
          <!-- <img src="{{ asset('newPublic/images/img1.jpg') }}" -->

          <img src="{{ asset('newPublic/images/lfticon8.png') }}">
        </span> <bdi>Data Sync</bdi></a></li>
    <li>
      <a href="#">
        <span><img src="{{ asset('newPublic/images/lfticon9.png') }}"></span>
        <bdi>Widgets</bdi>
      </a>
    </li>
    <!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon10.png') }} "></span> <bdi>Subscription</bdi></a></li> -->
    <li class="active">
      <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        {{-- <a href="{{ url('user') }}"> --}}
        <span><img src="{{ asset('newPublic/images/lfticon11.png') }}"></span> <bdi>Users Management</bdi>
      </a>

      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('cemeterys/getAddMember') }}">
          <span><img src="{{  asset('newPublic/images/images/lfticon15.png') }}"></span>
          <bdi>Add Cemetery Member</bdi>
        </a>
        <a class="dropdown-item " href="{{ url('user') }}"><span><img
              src=" asset('newPublic/images/images/lfticon14.png') }}"></span>
          <bdi>Users</bdi></a>
        <a class="dropdown-item" href="{{ url('user/getSignIn') }}">
          <span><img src="{{ asset('newPublic/images/images/lfticon15.png') }}"></span>
          <bdi>SignIn</bdi>
        </a>
      </div>
    </li>
    <li>
      <a href="{{ url('roles') }}"><span>
          <img src="{{ asset('newPublic/images/lfticon12.png') }}"></span>
        <bdi>Roles</bdi>
      </a>
    </li>
    <li><a href="{{ url('user/profile') }}"><span><img src="{{ asset('newPublic/images/lfticon13.png') }}"></span>
        <bdi>My Account</bdi></a></li>
  </ul>
</aside>