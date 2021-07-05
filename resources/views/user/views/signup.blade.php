<!doctype html>
<html class="no-js" lang="en">
@include('user.views.include.head')

<body class="bg-transparent">

    <main>
        <div class="main-wrapper pb-0 mb-0">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-6">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.html">
                                            <img src="user/assets/images/logo/logo.png" alt="timeline logo">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in your
                                            life</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm">
                                            <input type="text" placeholder="Email or Userame" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm">
                                            <input type="password" placeholder="Password" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <button class="login-btn">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page-wrapper">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="timeline-bg-content bg-img"
                                    data-bg="user/assets/images/timeline/adda-timeline.jpg">
                                    <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world.
                                        Welcome in Adda.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                                <div class="signup-form-wrapper">
                                    <h1 class="create-acc text-center">Create An Account</h1>
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Wellcome to Adda</h3>
                                        <form class="signup-inner--form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="email" class="single-field" placeholder="Email">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="single-field" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="single-field" placeholder="Last Name">
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" class="single-field" placeholder="Password">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Gender</option>
                                                        <option value="sales">Male</option>
                                                        <option value="sales">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Age</option>
                                                        <option value="sales">18+</option>
                                                        <option value="sales">18-</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Country</option>
                                                        <option value="sales">Bangladesh</option>
                                                        <option value="sales">Noakhali</option>
                                                        <option value="sales">Australia</option>
                                                        <option value="sales">China</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <button class="submit-btn">Create Account</button>
                                                </div>
                                            </div>
                                            <h6 class="terms-condition">I have read & accepted the <a href="#">terms of
                                                    use</a></h6>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
