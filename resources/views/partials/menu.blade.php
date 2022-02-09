<aside class="asidelft">
	<ul>
		{{-- <li>
      <a href="#">
      <span><img src="{{ asset('newPublic/images/lfticon1.png') }}"></span> 
      <bdi>Dashboard</bdi></a>
    </li> --}}

		<li class="{{ request()->is('dashboard') ? 'active' : '' }}">
			<a href="{{ url('dashboard') }}">
				<span><img src="{{ asset('newPublic/images/lfticon1.png') }}"></span>
				<bdi>Dashboard</bdi>
			</a>
		</li>

		<li class="dropdown {{ request()->is('cemeterys') ? 'show active' : '' }}  {{ request()->is('cemeterys/getEdit') ? 'show active' : 'aaa' }}  {{ request()->is('cemeterys/create') ? 'show active' : '' }} {{ request()->is('plots/getEdit') ? 'show active' : 'fdhsf' }} {{ request()->is('plots/create') ? 'show active' : 'dssdsd' }} {{ request()->is('plots') ? 'show active' : '' }} "  >

			<a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				<span><img src="{{ asset('newPublic/images/lfticon2.png') }}"></span>
				<bdi>Property</bdi>
      </a>
			<div class="dropdown-menu {{ request()->is('cemeterys') ? 'active show' : '' }} {{ request()->is('cemeterys/create') ? 'active show' : '' }} {{ request()->is('plots') ? 'active show' : '' }} {{ request()->is('plots/create') ?'active show' : 'ASDD' }}  {{ request()->is('cemeterys/getEdit') ? 'show active' : 'aaa' }}  {{ request()->is('plots/getEdit') ? 'show active' : 'fdhsf' }}"
				aria-labelledby="navbarDropdown">

				<a class="dropdown-item {{ request()->is('cemeterys') ? 'active' : '' }}  {{ request()->is('cemeterys/getEdit') ? 'active' : 'fdhsf' }}" href="{{ url('cemeterys') }}"><span>
						<img src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
					<bdi>Cemetery</bdi></a>
				<a class="dropdown-item {{ request()->is('cemeterys/create') ? 'active' : '' }}"
					href="{{ url('cemeterys/create') }}">
					<span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
					<bdi>Add Cemetery</bdi>
				</a>
				<a class="dropdown-item {{ request()->is('plot') ? 'active' : '' }}  {{ request()->is('plot/getEdit') ? 'show active' : '' }}" href="{{ url('plot') }}"><span><img
							src="{{ asset('newPublic/images/lfticon16.png') }}"></span>
					<bdi>Plots</bdi></a>
				<a class="dropdown-item {{ request()->is('plot/create') ? 'active' : '' }}"
					href="{{ url('plot/create') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span>
					<bdi>Add
						Plots</bdi></a>
				{{-- <a class="dropdown-item" href="{{ url('plot/customeNew') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span>
          <bdi>Add Custome Plots</bdi></a> --}}

			</div>
		</li>

		<!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon3.png') }}" ></span> <bdi>Products</bdi></a></li> -->
		<!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon4.png') }}" ></span> <bdi>Services</bdi></a></li>
		<li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon5.png') }}" ></span> <bdi>Orders</bdi></a></li>
		<li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon6.png') }}" ></span> <bdi>Payments</bdi></a></li> -->
		<li class="{{ request()->is('mailbox') ? 'active' : '' }}">
			<a href="{{ url('mailbox') }}">
				<span><img src="{{ asset('newPublic/images/lfticon7.png') }}"></span>
				<bdi>Mailbox</bdi>
			</a>
		</li>

		{{-- <li><a href="{{ url('cemeterys/dataSync') }}"><span>
          <!-- <img src="{{ asset('newPublic/images/img1.jpg') }}" -->

          <img src="{{ asset('newPublic/images/lfticon8.png') }}">
        </span> <bdi>Data Sync</bdi></a>
    </li> --}}
		@if (!auth()->user()->roles->contains(3))
			<li class="{{ request()->is('widgets') ? 'active' : '' }}">
				<a href="{{ url('widgets') }}">
					<span><img src="{{ asset('newPublic/images/lfticon9.png') }}"></span>
					<bdi>Widgets</bdi>
				</a>
			</li>

			<!-- <li><a href="#"><span><img src="{{ asset('newPublic/images/lfticon10.png') }} "></span> <bdi>Subscription</bdi></a></li> -->
			<li
				class="dropdown  {{ request()->is('users') ? 'active show' : '' }} {{ request()->is('cemeterys/getInvitePeople') ? 'show active' : '' }}  {{ request()->is('users/getEdit') ? 'active show' : '' }}  {{ request()->is('users/create') ? 'active show' : '' }}">

				{{-- <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span><img src="{{ asset('newPublic/images/lfticon2.png') }}"></span>
        <bdi>Property</bdi></a> --}}
				<a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					{{-- <a href="{{ url('user') }}"> --}}
					<span><img src="{{ asset('newPublic/images/lfticon11.png') }}"></span> <bdi>Users Management</bdi>
				</a>

				<div class="dropdown-menu {{ request()->is('cemeterys/getInvitePeople') ? 'show' : '' }} {{ request()->is('users') ? 'show' : '' }}   {{ request()->is('users/getEdit') ? 'show' : '' }} {{ request()->is('users/create') ? 'show' : '' }}"
					aria-labelledby="navbarDropdown">
					<a class="dropdown-item  {{ request()->is('cemeterys/getInvitePeople') ? 'active' : '' }}"
						href="{{ url('cemeterys/getInvitePeople') }}">
						<span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
						<bdi>Invite Cemetery Member</bdi>
					</a>

					<a class="dropdown-item {{ request()->is('users') ? 'active' : '' }} {{ request()->is('users/create') ? 'active' : '' }} {{ request()->is('users/getEdit') ? 'active' : '' }}" href="{{ url('users') }}"><span><img
								src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
						<bdi>Users</bdi></a>
					{{-- <a class="dropdown-item" href="{{ url('user/getSignIn') }}">
          <span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
          <bdi>SignIn</bdi>
        </a> --}}
				</div>
			</li>
			<li class="{{ request()->is('roles*') ? 'active' : '' }}">
				<a href="{{ url('roles') }}"><span>
						<img src="{{ asset('newPublic/images/lfticon12.png') }}"></span>
					<bdi>Roles</bdi>
				</a>
			</li>
		@endif
		<li class="{{ request()->is('user/profile') ? 'active' : '' }}">
			<a href="{{ url('user/profile') }}"><span><img src="{{ asset('newPublic/images/lfticon13.png') }}"></span>
				<bdi>My Account</bdi></a>
		</li>
	</ul>
</aside>
