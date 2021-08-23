<div class="left_sidebar">
    <nav class="sidebar">
        <div class="user-info">
            <div class="image"><a href="javascript:void(0);"><img
                        src="{{ Storage::url(Auth::user()->profil_image_url) }}" alt="User"></a>
            </div>
            <div class="detail mt-3">
                <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                <small>Super Admin</small>
            </div>

        </div>
        <ul id="main-menu" class="metismenu">
            <li class="g_heading">Main</li>
            <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a
                    href="{{ route('admindex') }}"><i class="ti-home"></i><span>Dashboard</span></a></li>
            <li class="g_heading">Application</li>
            <li class="{{ Route::currentRouteName() == 'admUser' ? 'active' : '' }}"><a
                    href="{{ route('admUser') }}"><i class="ti-id-badge"></i><span>User List</span></a></li>
            <li class="{{ Route::currentRouteName() == 'admPost' ? 'active' : '' }}"><a
                    href="{{ route('admPost') }}"><i class="ti-view-list"></i><span>Posts</span></a></li>
            <li class="{{ Route::currentRouteName() == 'admOrg' ? 'active' : '' }}"><a
                    href="{{ route('admOrg') }}"><i class="ti-view-list"></i><span>Organisasi</span></a></li>
            <li class="{{ Route::currentRouteName() == 'admReport' ? 'active' : '' }}"><a
                    href="{{ route('admReport') }}"><i class="ti-view-list"></i><span>Report</span></a></li>




        </ul>
    </nav>
</div>
