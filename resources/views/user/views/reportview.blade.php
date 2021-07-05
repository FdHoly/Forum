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
            <!-- profile banner area start -->
            <div class="profile-banner-large bg-img" data-bg="user/assets/images/banner/profile-banner.jpg">
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
                                        <img src="user/assets/images/profile/profile-1.jpg" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>

                        @include('user.views.include.profilemenu')

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
                                            <button type="button">BAN</button>

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
                                            <button type="button">BAN</button>

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
                                            <button type="button">BAN</button>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Ini Postingan Yang Udah Diupload oleh User</td>
                                        <td>Joko</td>
                                        <td>KBMTI</td>
                                        <td>Gasuka aja karena gw ya ga suka</td>
                                        <td>
                                            {{-- <button type="danger"></button> --}}
                                            <button type="button" class="btn bg-primary">Gapapa</button>
                                            <button type="button">BAN</button>

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
                                            <button type="button">BAN</button>

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

    @include('user.views.include.modjs')

</body>

</html>
