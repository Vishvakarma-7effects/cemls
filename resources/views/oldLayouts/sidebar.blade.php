<aside class="col-lg-3 pt-3 pt-lg-0">
    <div class="sticky-top sticky-sidebar dashboard-sidebar d-none d-lg-block d-xl-block">
        <ul id="dashboard-menu" class="nav nav-pills nav-pills-vertical-styled overflow-auto" style="max-height: 20rem;">
            <li class="nav-item">
                <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
            </li>
			  <li class="nav-item">
                <a href="{{ url('inbox') }}" class="nav-link">Mailbox</a>
            </li>
			  <li class="nav-item">
                <a href="{{ url('plot') }}" class="nav-link">Plots</a>
            </li>
            @can('event_main')
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-expanded="false">Cemetery</a>
                <ul class="nav flex-column ml-3 collapse" id="setting-collapse">
                    @can('event_add')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('events/create') }}">Create Cemetery</a>
                    </li>
                    @endcan

                    @if(auth()->user()->can('event_edit') || auth()->user()->can('event_delete'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('cemeterys')}}">Manage Cemetery</a>
                    </li>
                    @endif
                </ul>
            </li>
            @endcan










            <li class="nav-item">
                <a href="{{ url('user/profile') }}" class="nav-link">Account Details</a>
            </li>
            @can('page_main')
            <li class="nav-item">
                <a href="{{ url('pages') }}" class="nav-link">Page</a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#role-collapse" aria-expanded="false">Manage User</a>
                <ul class="nav flex-column ml-3 collapse" id="role-collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user') }}">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('role') }}">Role & Permission</a>
                    </li>
                </ul>
            </li>
            @can('role_user_main')
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#role-collapse" aria-expanded="false">Manage User</a>
                <ul class="nav flex-column ml-3 collapse" id="role-collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('role') }}">Role & Permission</a>
                    </li>
                </ul>
            </li>
            @endcan


            @can('menu_main')
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#setting2-collapse" aria-expanded="false">Setting</a>
                <ul class="nav flex-column ml-3 collapse" id="setting2-collapse">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('menus') }}">Menus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('categories') }}">Event Category</a>
                    </li>
                </ul>
            </li>
            @endcan
            <li class="nav-item">
                <!--<a href="#" class="nav-link">Logout</a>-->

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                   {{ __('Logout') }}
                   class="nav-link">Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>

