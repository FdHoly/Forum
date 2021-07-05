<!doctype html>
<html class="no-js" lang="en">

@include('include.head')

<body>

    <!-- header area start -->
    <header>
        @include('include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            <!-- profile banner area start -->
            <div class="profile-banner-large bg-img" data-bg="assets/images/banner/profile-banner.jpg">
            </div>
            <!-- profile banner area end -->

            <!-- profile menu area start -->
            <div class="profile-menu-area secondary-navigation-style bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="#">
                                        <img src="assets/images/profile/profile-1.jpg" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>

                        @include('include.profilemenu')

                        <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- profile menu area end -->

            <!-- sendary menu start -->
            <div class="menu-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                                <div class="page-title-inner">
                                    <h4 class="page-title p-4">Jumlah Laporan (10)</h4>
                                </div>
                                {{-- <div class="post-settings-bar">
                                    {{-- <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>edit profile</button></li>
                                            <li><button>activity log</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sendary menu end -->

            <!-- photo section start -->
            <div class="friends-section mt-20">
                <div class="container">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Index</th>
                                        <th scope="col">Postingan</th>
                                        <th scope="col">Diposting Oleh</th>
                                        <th scope="col">Organisasi</th>
                                        <th scope="col">Alasan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button" >BAN</button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button" >BAN</button>

                                        </td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button" >BAN</button>

                                        </td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja karena gw ya ga suka</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button" >BAN</button>

                                        </td>
                                    </tr><tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button" >BAN</button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- photo section end -->
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
