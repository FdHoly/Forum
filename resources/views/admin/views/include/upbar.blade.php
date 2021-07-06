<nav class="navbar custom-navbar navbar-expand-lg py-2">
    <div class="container-fluid px-0">
        <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
        <a href="index.html" class="navbar-brand"><img src="../admin/assets/images/brand/icon.svg" alt="BigBucket" />
            <strong>Big</strong> Bucket</a>
        <div id="navbar_main">
            <ul class="navbar-nav mr-auto hidden-xs">
                <li class="nav-item page-header">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">
                            @switch(Route::currentRouteName())
                                @case('index')
                                    {{ 'Dashboard' }}
                                @break
                                @case('app-contact')
                                    {{ 'Users' }}
                                @break
                                @case('table-basic')
                                    {{ 'Posts' }}
                                @break
                                @case('report-user')
                                    {{ 'Reports' }}
                                @break
                                @case('table-group')
                                    {{ 'Organisasi' }}
                                @break
                                @default

                            @endswitch
                        </li>

                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item hidden-xs">
                    <form class="form-inline main_search">
                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search..."
                            aria-label="Search">
                    </form>
                </li>
                <li class="nav-item"><a class="nav-link nav-link-icon" href="javascript:void(0);"><i
                            class="fa fa-cogs"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0">
                        <div class="py-3 px-3">
                            <h5 class="heading h6 mb-0">Notifications <span
                                    class="badge badge-pill badge-primary text-uppercase float-right">3</span></h5>
                        </div>
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-purple">JD</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Johnyy Depp <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-pink">TC</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Tom Cruise <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur eiusmod tempor</p>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex">
                                <div class="list-group-img"><span class="avatar bg-blue">WS</span></div>
                                <div class="list-group-content">
                                    <div class="list-group-heading">Will Smith <small>10:05 PM</small></div>
                                    <p class="text-sm">Lorem sit amet consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </a>
                        </div>
                        <div class="py-3 text-center">
                            <a href="javascript:void(0);" class="link link-sm link--style-3">View all
                                notifications</a>
                        </div>
                    </div>
                </li>
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
