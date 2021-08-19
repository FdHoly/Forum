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
                                    <h4 class="page-title">Organisasi (6)</h4>
                                </div>
                                <div class="filter-menu">
                                    <button class="active" data-filter="*">all</button>
                                    <button data-filter=".recently">Mutual</button>
                                    <button data-filter=".relative">relative</button>

                                </div>
                                <div class="post-settings-bar">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sendary menu end -->

            <!-- photo section start -->
            <div class="friends-section mt-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-box friends-zone">
                                <div class="row mt--20 friends-list">


                                    {{-- @foreach ($collection as $item) --}}

                                    @foreach ($org as $orgData)
                                        <div class="col-lg-3 col-sm-6 recently request">
                                            <div class="friend-list-view">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="user/assets/images/profile/profile-small-23.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="posted-author">
                                                    <h6 class="author"><a
                                                            href="organisasi/{{ $orgData->id_groups }}">{{ $orgData->nama }}</a>
                                                    </h6>
                                                    <h5 class="author"><a
                                                            href="organisasi/kbmti">{{ $orgData->universitas->nama }}</a>
                                                    </h5>
                                                    <button class="add-frnd">Tergabung</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- @endfor --}}

                                    {{-- @endforeach --}}
                                </div>
                            </div>
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
