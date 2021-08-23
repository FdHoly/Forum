<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="adm" class="navbar-brand"><img src="../user/assets/images/logo/logo.png" alt="BigBucket" />
            <strong>Forumio</strong></a>
        <div id="navbar_main">
            <ul class="navbar-nav mr-auto hidden-xs">
                <li class="nav-item page-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="adm"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">
                            @switch(Route::currentRouteName())
                                @case('admindex')
                                    {{ 'Dashboard' }}
                                @break
                                @case('admUser')
                                    {{ 'Users' }}
                                @break
                                @case('admPost')
                                    {{ 'Posts' }}
                                @break
                                @case('admReport')
                                    {{ 'Reports' }}
                                @break
                                @case('admOrg')
                                    {{ 'Organisasi' }}
                                @break
                                @default

                            @endswitch
                        </li>

                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Admin menu</h6>
                        <a class="dropdown-item" href="{{ route('profile') }}"><i
                                class="fa fa-user text-primary"></i>My
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('index') }}"><i
                                class="fa fa-home text-primary"></i>Home
                            Page</a>
                        <form id="out" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="javascript:{}"
                                onclick="document.getElementById('out').submit();"><i
                                    class="fa fa-sign-out text-primary"></i>Sign out</a>
                        </form>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
