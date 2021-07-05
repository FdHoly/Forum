<div class="left_sidebar">
    <nav class="sidebar">
        <div class="user-info">
            <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
            <div class="detail mt-3">
                <h5 class="mb-0">Mike Thomas</h5>
                <small>Admin</small>
            </div>
            <div class="social">
                <a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
                <a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
            </div>
        </div>
        <ul id="main-menu" class="metismenu">
            <li class="g_heading">Main</li>
            <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a href="{{ route('index') }}"><i
                        class="ti-home"></i><span>Dashboard</span></a></li>
            <li class="g_heading">Application</li>
            <li class="{{ Route::currentRouteName() == 'app-contact' ? 'active' : '' }}"><a
                    href="{{ route('app-contact') }}"><i class="ti-id-badge"></i><span>User List</span></a></li>
            <li class="{{ Route::currentRouteName() == 'table-basic' ? 'active' : '' }}"><a
                    href="{{ route('table-basic') }}"><i class="ti-view-list"></i><span>Posts</span></a></li>
            <li class="{{ Route::currentRouteName() == 'table-group' ? 'active' : '' }}"><a
                    href="{{ route('table-group') }}"><i class="ti-view-list"></i><span>Organisasi</span></a></li>
            <li class="{{ Route::currentRouteName() == 'report-user' ? 'active' : '' }}"><a
                    href="{{ route('report-user') }}"><i class="ti-view-list"></i><span>Report</span></a></li>




        </ul>
    </nav>
</div>
