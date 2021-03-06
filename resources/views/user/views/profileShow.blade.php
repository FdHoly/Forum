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
            <div class="profile-banner-large bg-img" data-bg="{{ Storage::url($prof->background_image_url) }}">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="{{ route('profileID', $prof->email) }}">
                                        <img src="{{ Storage::url($prof->profil_image_url) }}
                                        " alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 offset-lg-1">
                            <div class="profile-menu-wrapper">
                                <div class="main-menu-inner header-top-navigation">
                                    <nav>
                                        <ul class="main-menu">
                                            <li
                                                class="{{ Route::currentRouteName() == 'profileID' ? 'active' : '' }}">
                                                <a href="{{ route('profileID', $prof->email) }}">Post</a>
                                            </li>
                                            <li
                                                class="{{ Route::currentRouteName() == 'organisasiNya' ? 'active' : '' }}">
                                                <a href="{{ route('organisasiNya', $prof->email) }}">Organisasi</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-2 col-md-3 d-none d-md-block">

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
                                <h4 class="widget-title">{{ $prof->name }}</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        {{-- <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a --}}

                                        <p>{{ $prof->biodata ?? 'Belum ada biodata' }}</p>
                                        <ul class="author-into-list">
                                            <li><a><i class="bi bi-user-ID align-middle"></i>{{ $prof->email }}</a>

                                            <li><a><i
                                                        class="bi bi-location-pointer"></i>{{ $prof->universitas->nama }}</a>
                                            </li>
                                            {{-- <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Organisasi</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        @foreach ($org as $itemOrg)
                                            <li class="unorder-list">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <a
                                                        href="{{ route('detailOrg', ['id' => $itemOrg->id_groups]) }}">
                                                        <figure class="profile-thumb-small">
                                                            <img src="{{ Storage::url($itemOrg->logo_url) }}"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="unorder-list-info">
                                                    <h3 class="list-title"><a
                                                            href={{ route('detailOrg', ['id' => $itemOrg->id_groups]) }}>{{ $itemOrg->nama }}</a>
                                                    </h3>
                                                    <p class="list-subtitle"><a>{{ $itemOrg->universitas->nama }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- post status start -->
                        <x-post :post="$prof->utas" />

                    </div>
                    {{-- <x-events :pengumuman="$pengumuman" :acara="$acara" :rapat="$rapat" /> --}}

                    {{-- @include('user.views.include.event') --}}
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

    @include('user.views.include.modjs')

</body>

</html>
