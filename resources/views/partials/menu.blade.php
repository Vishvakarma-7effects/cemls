
<?php 
 $permissionArr =getPermission(auth()->user()->userrole);
	?>

<aside class="asidelft">
					{{-- {{ dd(Auth::guard('web')->user()->userrole)}} --}}

	<ul>
		{{-- <li>
      <a href="#">
      <span><img src="{{ asset('newPublic/images/lfticon1.png') }}"></span> 
      <bdi>Dashboard</bdi></a>
			</li> --}}
			@can('admin_dashboard')
			{{-- @if($permissionArr->contains('admin_dashboard')) --}}
				<li class="{{ request()->is('dashboard') ? 'active' : '' }}">
						<a href="{{ url('dashboard') }}">
							<span><img src="{{ asset('newPublic/images/lfticon1.png') }}"></span>
							<bdi>Dashboard</bdi>
						</a>
					</li>
			@endcan
			{{-- @endif --}}

		<li class="dropdown {{ request()->is('cemetery') ? 'show active' : '' }}  {{ request()->is('cemetery/getEdit') ? 'show active' : 'aaa' }}  {{ request()->is('cemetery/create') ? 'show active' : '' }} {{ request()->is('plots/getEdit') ? 'show active' : 'fdhsf' }} {{ request()->is('plots/create') ? 'show active' : 'dssdsd' }} {{ request()->is('plots') ? 'show active' : '' }} "  >

			<a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				<span><img src="{{ asset('newPublic/images/lfticon2.png') }}"></span>
				<bdi>Property</bdi>
				</a>

			<div class="dropdown-menu {{ request()->is('cemeteries') ? 'active show' : '' }} {{ request()->is('cemeteries/create') ? 'active show' : '' }} {{ request()->is('plots') ? 'active show' : '' }} {{ request()->is('plots/create') ?'active show' : 'ASDD' }}  {{ request()->is('cemetery/edit') ? 'show active' : 'aaa' }}  {{ request()->is('plots/getEdit') ? 'show active' : 'fdhsf' }}"
				aria-labelledby="navbarDropdown">
				                         

    @can('cemetery_list')
				{{-- @if($permissionArr->contains('cemetery_main')) --}}
				<a class="dropdown-item {{ request()->is('cemeteries') ? 'active' : '' }}  {{ request()->is('cemetery/getEdit') ? 'active' : 'fdhsf' }}" href="{{ url('cemeteries') }}"><span>
						<img src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
					<bdi>Cemeteries</bdi></a>
 		{{-- @endif --}}
					@endcan

			{{-- @if($permissionArr->contains('cemetery_add')) --}}
    @can('cemetery_add')

				<a class="dropdown-item {{ request()->is('cemeteries/create') ? 'active' : '' }}"
					href="{{ url('cemeteries/create') }}">
					<span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
					<bdi>Add Cemetery</bdi>
				</a>
				{{-- @endif --}}
				@endcan
				
			@can('plot_list')

				<a class="dropdown-item {{ request()->is('plots') ? 'active' : '' }}  {{ request()->is('plots/getEdit') ? 'show active' : '' }}" href="{{ url('plots') }}"><span><img
							src="{{ asset('newPublic/images/lfticon16.png') }}"></span>
					<bdi>Plots</bdi></a>

				@endcan

			{{-- @if($permissionArr->contains('plot_add')) --}}
    @can('plot_add')

				<a class="dropdown-item {{ request()->is('plots/create') ? 'active' : '' }}"
					href="{{ url('plots/create') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span>
					<bdi>Add
						Plots</bdi>
				</a>

			{{-- @endif --}}
							@endcan

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
		{{-- @if (!auth()->user()->roles->contains(3)) --}}
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
					<span><img src="{{ asset('newPublic/images/lfticon11.png') }}"></span> <bdi>Manage Users</bdi>
				</a>

				<div class="dropdown-menu {{ request()->is('cemetery/getInvitePeople') ? 'show' : '' }} {{ request()->is('users') ? 'show' : '' }}   {{ request()->is('users/getEdit') ? 'show' : '' }} {{ request()->is('users/create') ? 'show' : '' }}"
					aria-labelledby="navbarDropdown">

					@can('invite_user')
						<a class="dropdown-item  {{ request()->is('cemetery/getInvitePeople') ? 'active' : '' }}"
							href="{{ url('cemetery/getInvitePeople') }}">
							<span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
							<bdi>Invite User</bdi>
						</a>
					@endcan

					@can('user_list')
						<a class="dropdown-item {{ request()->is('users') ? 'active' : '' }} {{ request()->is('users/getEdit') ? 'active' : '' }}" href="{{ url('users') }}"><span><img
									src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
							<bdi>Users</bdi>
						</a>
					@endcan

					@can('user_add')
						<a class="dropdown-item {{ request()->is('users/create') ? 'active' : '' }}" href="{{ url('users/create') }}"><span><img src="{{ asset('newPublic/images/lfticon17.png') }}"></span>
          <bdi>Add User</bdi>
						</a>
					@endcan

					{{-- <a class="dropdown-item" href="{{ url('user/getSignIn') }}">
          <span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
          <bdi>SignIn</bdi>
        </a> --}}
				</div>
			</li>

			@can('role_list')
				<li class="{{ request()->is('roles*') ? 'active' : '' }}">
					<a href="{{ url('roles') }}"><span>
							<img src="{{ asset('newPublic/images/lfticon12.png') }}"></span>
						<bdi>Roles</bdi>
					</a>
				</li>
			@endcan
		{{-- @endif --}}
        
		<li
				class="dropdown">

				{{-- <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span><img src="{{ asset('newPublic/images/lfticon2.png') }}"></span>
        <bdi>Property</bdi></a> --}}
				<a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					{{-- <a href="{{ url('user') }}"> --}}
					<span><img src="{{ asset('newPublic/images/lfticon11.png') }}"></span> <bdi>Setting</bdi>
				</a>

				<div class="dropdown-menu"
					aria-labelledby="navbarDropdown">

					
						<a class="dropdown-item "
							href="{{ url('location') }}">
							<span><img src="{{ asset('newPublic/images/lfticon15.png') }}"></span>
							<bdi>Location</bdi>
						</a>
					
					
						<a class="dropdown-item" href="{{ url('tag') }}"><span><img
									src="{{ asset('newPublic/images/lfticon14.png') }}"></span>
							<bdi>Tags</bdi>
						</a>
					

					
				</div>
			</li>


		@can('my_account')
		<li class="{{ request()->is('user/profile') ? 'active' : '' }}">
			<a href="{{ url('user/profile') }}"><span><img src="{{ asset('newPublic/images/lfticon13.png') }}"></span>
				<bdi>My Account</bdi></a>
		</li>

		@endcan
	</ul>
</aside>
