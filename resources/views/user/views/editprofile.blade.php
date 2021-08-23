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
                <div class="profile-banner-large bg-img"
                    data-bg="{{ Storage::url(Auth::user()->background_image_url) }}">
                </div>

            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <span aria-hidden="true"></span>
                                <figure class="profile-picture">
                                    {{-- <div class="avatarUploaderIndicator-2G-aIZ"><img
                                            src="{{ url('user/assets/images/logo/edit.png') }}" alt="">
                                    </div> --}}
                                    <img src="{{ Storage::url(Auth::user()->profil_image_url) }}"
                                        alt="profile picture">
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

                                <h4 class="widget-title">{{ Auth::user()->name }}</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>{{ Auth::user()->biodata === null ? 'Tidak Ada Biodata' : Auth::user()->biodata }}
                                        </p>
                                        <ul class="author-into-list">

                                            <li><a href={{ route('profile') }}><i
                                                        class="bi bi-location-pointer"></i>{{ Auth::user()->universitas->nama }}</a>
                                            </li>

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
                            
                            @if (session('status'))
                                <div class="alert alert-success mt-2">{{ session('status') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    @foreach ($errors as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif

                            <form class="signup-inner--form" action="{{ route('editprofile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="m-2">Username</h6>
                                        <input type="text" name="name" class="single-field"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="col-12">
                                        <h6 class="m-2">Biodata</h6>
                                        <input type="text" name="biodata" placeholder="Biodata" class="single-field"
                                            value="{{ Auth::user()->biodata }}">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="oldPass" class="single-field"
                                            placeholder="Old Password">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="password" class="single-field"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" name="cPass" class="single-field"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="col-6">
                                        <h6 class="m-2">Foto Profil</h6>
                                        <input name="profilePic" type="file" class="form-control-file"
                                            id="exampleFormControlFile1">
                                    </div>
                                    <div class="col-6">
                                        <h6 class="m-2">Foto Background</h6>
                                        <input name="backgroundPic" type="file" class="form-control-file"
                                            id="exampleFormControlFile1">
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

    @include('user.views.include.modjs')

</body>

</html>
