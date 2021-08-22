<div class="header-top sticky bg-white d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <!-- header top navigation start -->
                <div class="header-top-navigation">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Beranda</a></li>
                            <li class="active"><a href="{{ route('listorg') }}">organisasi</a></li>
                            <li class="active"><a href="{{ route('grupbaru') }}">Buat Organisasi</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- header top navigation start -->
            </div>

            <div class="col-md-2">
                <!-- brand logo start -->
                <div class="brand-logo text-center">
                    <a href="{{ route('index') }}">
                        <img src="{{ url('user/assets/images/logo/logo.png') }}" alt="brand logo">
                    </a>
                </div>
                <!-- brand logo end -->
            </div>

            <div class="col-md-5">
                <div class="header-top-right d-flex align-items-center justify-content-end">
                    <!-- header top search start -->
                    <div class="header-top-search">
                        <form action=" {{route('listorg')}} " method="GET" class="top-search-box">
                            
                            <input type="text" name="search" placeholder="Cari Organisasimu" class="top-search-field">
                            <button type="submit" class="top-search-btn"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <!-- header top search end -->

                    <!-- profile picture start -->
                    <div class="profile-setting-box">
                        <div class="profile-thumb-small">
                            <a href="javascript:void(0)" class="profile-triger">
                                <figure>
                                    <img src="{{ Storage::url(Auth::user()->profil_image_url) }}"
                                        alt="profile picture">
                                </figure>
                            </a>
                            <div class="profile-dropdown">
                                <div class="profile-head">
                                    <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
                                    <a class="mail" href="#">{{ Auth::user()->email }}</a>
                                </div>
                                <div class="profile-body">
                                    <ul>
                                        <li><a href="{{ route('profile') }}"><i class="flaticon-user"></i>Profile</a>
                                        </li>
                                        {{-- <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li> --}}
                                        <li><a href={{ route('organisasiku') }}><i
                                                    class="flaticon-document"></i>Groups</a></li>
                                        <li>
                                            <a>
                                                <form method="POST" action="{{ route('logout') }}">@csrf<button
                                                        type="submit"><i class="flaticon-unlock"></i>Sign
                                                        out</button></form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile picture end -->
                </div>
            </div>
        </div>
    </div>
</div>
