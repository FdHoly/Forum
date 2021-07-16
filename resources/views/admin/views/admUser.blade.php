<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: BigBucket :: Contact List</title>
    <link rel="stylesheet" href="../admin/assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../admin/assets/css/main.css" type="text/css">
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../admin/assets/images/brand/icon_black.svg" width="48" height="48"
                    alt="ArrOw">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    @include('admin.views.include.upbar')


    <div class="main_content" id="main-content">

        @include('admin.views.include.sidebar')

        <div class="right_sidebar">
            <div class="setting_div">
                <a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
            </div>
            <ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings"
                        role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
                <li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab"
                        aria-controls="Contact" aria-selected="false">Contact</a></li>
            </ul>
            <hr>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
                    <div class="sidebar-scroll">
                        <div class="sidebar-widget px-3">
                            <h5>Theme Setting</h5>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="black">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="azure">
                                    <div class="azure"></div>
                                </li>
                                <li data-theme="indigo" class="active">
                                    <div class="indigo"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Dark Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-dark">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Mini Sidebar</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" class="switch-sidebar">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>Language Setting</h5>
                            <select class="selectpicker" title="Select language">
                                <option>English</option>
                                <option>Spanish</option>
                                <option>Chinese</option>
                                <option>Hindi</option>
                                <option>Arabic</option>
                            </select>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <h5>General Setting</h5>
                            <ul class="setting-list list-unstyled mt-3">
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Report Panel Usage</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Email Redirect</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Notifications</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox">
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                                <li>
                                    <label class="custom-switch">
                                        <span class="custom-switch-description">Location Permission</span>
                                        <label class="toggle-switch switch-sm mb-0">
                                            <input type="checkbox" checked>
                                            <span class="toggle-switch-slider"></span>
                                        </label>
                                    </label>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="sidebar-widget px-3">
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">New Project</h4>
                                <h4 class="progress-percentage text-uppercase">$950</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase"> Admin</h4>
                                <h4 class="progress-percentage text-uppercase">$10k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Balance</h4>
                                <h4 class="progress-percentage text-uppercase">$50k</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="progress-wrapper">
                                <h4 class="progress-label text-uppercase">Storage</h4>
                                <h4 class="progress-percentage text-uppercase">35GB</h4>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
                                <span class="btn-inner--visible">Upgrade Now</span>
                                <span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
                    <div class="sidebar-widget px-3">
                        <ul class="list-unstyled contact-list">
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar2.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar4.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar5.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar6.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar7.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="contact-img">
                                    <img src="../admin/assets/images/xs/avatar8.jpg" class="rounded" alt="">
                                </span>
                                <h4 class="contact-name">Aiden Chavaz</h4>
                                <div class="action">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fab fa-skype"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i
                                            class="fa fa-envelope"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between">

                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length"
                                            aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>

                                </div>


                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm"
                                            placeholder="" aria-controls="DataTables_Table_0"></label>
                                </div>

                            </div>
                            <table class="table table-hover mb-0 c_table">
                                <thead>
                                    <tr>
                                        <th class="w60">ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Total Post</th>
                                        <th>Total Post Report</th>
                                        <th class="text-center">Jumlah Organisasi</th>
                                        <th>Report Page</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <span class="ml-2">{{ $item->id_users }}</span>

                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar1.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">{{ $item->name }}</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">{{ $item->email }}</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">{{ $item->utas->count() }}</span>
                                            </td>
                                            <td class="text-center"> <span
                                                    class="phone">{{ $item->report->count() }}</span>
                                            <td class="text-center"> <span
                                                    class="phone">{{ $item->UserGroup->count() }}</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td>
                                                <span class="ml-2">2</span>

                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar3.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Hossein Shams</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">hosseinshams@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">2583</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">2</span>
                                            <td class="text-center"> <span class="phone">23</span>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">3</span>

                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar6.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Tim Hank</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">timhank@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">1212</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">9</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">4</span>
                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar7.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Fidel Tonn</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">fideltonn@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">2323</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">0</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">5</span>
                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar8.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Gary Camara</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">garycamara@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">1005</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">6</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">6</span>
                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar9.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Frank Camly</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">frankcamly@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">9999</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">4</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">7</span>
                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar10.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Tim Hank</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">timhank@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">1212</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">3</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                                </>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="ml-2">8</span>

                                            </td>
                                            <td>
                                                <img src="../admin/assets/images/xs/avatar4.jpg" class="avatar w30"
                                                    alt="">
                                                <span class="ml-2">Maryam Amiri</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">maryamamiri@gmail.com</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">9513</span>
                                            </td>
                                            <td class="text-center"> <span class="phone">1</span></td>
                                            <td class="text-center"> <span class="phone">23</span></td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr> --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="../admin/assets/bundles/libscripts.bundle.js"></script>
    <script src="../admin/assets/bundles/vendorscripts.bundle.js"></script>

    <!-- Theme JS -->
    <script src="../admin/assets/js/theme.js"></script>
</body>

</html>
