<!doctype html>
<html class="no-js" lang="en">

@include('user.views.include.head')


<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">

            <div class="overflowHidden" style="height: 30%">
                <div class="profile-banner-large bg-img" data-bg="user/assets/images/banner/profile-banner.jpg">

                </div>
                <input class="fileInput-23-d-3" type="file" tabindex="0" multiple="" accept=".jpg,.jpeg,.png,.gif"
                    aria-label="Change
                                        Avatar"
                    style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">

                                <span aria-hidden="true"></span>
                                <figure class="profile-picture">
                                    <label for="image">
                                        <input class="fileInput-23-d-3" type="file" tabindex="0" multiple=""
                                            accept=".jpg,.jpeg,.png,.gif" aria-label="Change
                                        Avatar"
                                            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                        <div class="avatarUploaderIndicator-2G-aIZ"></div>
                                        <img src="user/assets/images/profile/profile-1.jpg" alt="profile picture">

                                    </label>


                                </figure>
                            </div>
                        </div>

                        @include('user.views.include.profilemenu')

                        <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <a href="{{ route('editprofile') }}"><button class="edit-btn">edit
                                        profile</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area profile-sidebar">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">kate palson</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>I Don’t know how? But i believe that it is possible one day if i stay with my
                                            dream all time</p>
                                        <ul class="author-into-list">
                                            <li><a href="#"><i class="bi bi-office-bag"></i>Graphic Designer</a></li>
                                            <li><a href="#"><i class="bi bi-home"></i>Melbourne, Australia</a></li>
                                            <li><a href="#"><i class="bi bi-location-pointer"></i>Pulshar, Melbourne</a>
                                            </li>
                                            <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <!-- widget single item start -->

                            <!-- widget single item end -->
                        </aside>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->

                            <!-- post title start -->
                            <form class="signup-inner--form">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="email" class="single-field" placeholder="Username">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="single-field" placeholder="Description">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="single-field" placeholder="Old Password">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="single-field" placeholder="Password">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="single-field" placeholder="Confirm Password">
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
                                        <button class="submit-btn">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- post status end -->


                        <!-- post status end -->
                    </div>


                </div>
            </div>
        </div>

    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



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
