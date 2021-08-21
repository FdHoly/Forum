<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="adm" class="navbar-brand"><img src="../admin/assets/images/brand/icon.svg" alt="BigBucket" />
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
                        <h6 class="dropdown-header">User menu</h6>
                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-user text-primary"></i>My
                            Profile</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span
                                class="float-right badge badge-success">$50K</span><i
                                class="fa fa-briefcase text-primary"></i>My Balance</a>
                        <a class="dropdown-item" href="javascript:void(0);"><span
                                class="float-right badge badge-warning">4</span><i
                                class="fa fa-envelope text-primary"></i>Inbox</a>
                        <a class="dropdown-item" href="javascript:void(0);"><i
                                class="fa fa-cog text-primary"></i>Settings</a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="javascript:void(0);"><i
                                class="fa fa-sign-out text-primary"></i>Sign out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
