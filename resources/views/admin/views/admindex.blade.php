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
                                <h2>{{ $user->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body">
                                <h6>Total Universitas yang terdaftar</h6>
                                <h2>{{ $universitas->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body">
                                <h6>Total Organisasi yang terdaftar</h6>
                                <h2>{{ $organisasi->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon domains">
                            <div class="body">
                                <h6>Total postingan</h6>
                                <h2>{{ $utas->count() }}</h2>
                            </div>
                        </div>
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
