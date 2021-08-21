<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: BigBucket :: Home</title>

    <link rel="stylesheet" href="../admin/assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../admin/assets/vendor/charts-c3/plugin.css" />
    <link rel="stylesheet" href="../admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css" />
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


        <div class="page">

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body">
                                <h6>Total user yang terdaftar</h6>
                                <h2>20 <small class="info">of 1Tb</small></h2>
                                <small>2% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body">
                                <h6>Total Universitas yang terdaftar</h6>
                                <h2>12% <small class="info">of 100</small></h2>
                                <small>6% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body">
                                <h6>Total Organisasi yang terdaftar</h6>
                                <h2>39 <small class="info">of 100</small></h2>
                                <small>Total Registered email</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon domains">
                            <div class="body">
                                <h6>Total postingan</h6>
                                <h2>8 <small class="info">of 10</small></h2>
                                <small>Total Registered Domain</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body">
                                <h6>Rata-rata post per user</h6>
                                <h2>20 <small class="info">of 1Tb</small></h2>
                                <small>2% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body">
                                <h6>Rata-rata post per Universitas</h6>
                                <h2>12% <small class="info">of 100</small></h2>
                                <small>6% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body">
                                <h6>Rata-rata post per Organisasi</h6>
                                <h2>39 <small class="info">of 100</small></h2>
                                <small>Total Registered email</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon traffic">
                            <div class="body">
                                <h6>User dengan post terbanyak</h6>
                                <h2>20 <small class="info">of 1Tb</small></h2>
                                <small>2% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="45"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body">
                                <h6>Universitas dengan post terbanyak</h6>
                                <h2>12% <small class="info">of 100</small></h2>
                                <small>6% higher than last month</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="38"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body">
                                <h6>Organisasi dengan post terbanyak</h6>
                                <h2>39 <small class="info">of 100</small></h2>
                                <small>Total Registered email</small>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Core -->
    <script src="../admin/assets/bundles/libscripts.bundle.js"></script>
    <script src="../admin/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../admin/assets/bundles/c3.bundle.js"></script>
    <script src="../admin/assets/bundles/jvectormap.bundle.js"></script>
    <!-- JVectorMap Plugin Js -->

    <script src="../admin/assets/js/theme.js"></script>
    <script src="../admin/assets/js/pages/index.js"></script>
    <script src="../admin/assets/js/pages/todo-js.js"></script>
</body>

</html>
