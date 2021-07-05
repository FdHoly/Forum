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
            {{-- <div class="profile-banner-large bg-img" data-bg="{{url('assets/images/banner/profile-banner.jpg')}}"> --}}
        </div>
        <div class="profile-menu-area bg-white" style="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">

                    </div>

                    {{-- @include('include.profilemenu') --}}
                    {{-- <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">

                    <aside class="widget-area">
                        <div class="mb-4">
                            <!-- widget single item start -->
                            <div class="organisasi__foto">
                                <figure class="profile-picture">
                                    <a href="#">
                                        <img src="https://media-exp3.licdn.com/dms/image/C510BAQHzyDspmy9zYQ/company-logo_200_200/0/1579617593341?e=2159024400&v=beta&t=JxR_8Y7zhu4MQh5c2iUqn_atI61woD5dCetYYgataQg"
                                            alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                            <div class="card widget-item">
                                <h4 class="widget-title">
                                    KBMTI
                                    <br>
                                    ( Keluarga Besar Mahasiswa Teknologi Informasi )
                                </h4>

                                {{-- <h4 >Keluarga Besar Mahasiswa Teknologi Informasi</h4> --}}
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>Akun Resmi Organisasi Himpunan Teknologi Informasi Universitas Brawijaya</p>
                                        <ul class="author-into-list">
                                            <li><a href="#"><i class="bi bi-home"></i>Universitas Brawijaya</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <button class="btn mt-3"> Gabung </button>
                                {{-- <button class="like-button icon__follow">
                                    <img class="heart" src="{{ url('assets/images/icons/heart.png') }}" alt="">
                                    <img class="heart-color" src="{{url('assets/images/icons/heart-color.png')}}" alt="">
                                </button> --}}
                            </div>
                        </div>
                        <!-- widget single item end -->


                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Pengikut</h4>
                            <div class="widget-body">

                                <ul class="like-page-list-wrapper">
                                    @for ($i = 0; $i < 4; $i++)
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ url('assets/images/profile/profile-small-33.jpg') }}"
                                                            alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="/profile">Azzamuddien</a></h3>
                                                {{-- <p class="list-subtitle"><a href="#"></a></p> --}}
                                            </div>

                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    {{-- <div class="card card-small">
                            <div class="share-box-inner"> --}}
                    <!-- profile picture end -->
                    {{-- <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{url('assets/images/profile/profile-small-37.jpg')}}" alt="profile picture">
                                        </figure>
                                    </a>
                                </div> --}}
                    <!-- profile picture end -->

                    <!-- share content box start -->
                    {{-- <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div> --}}
                    <!-- share content box end -->
                    <!-- Modal start -->
                    {{-- <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <button type="button" class="post-share-btn">post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                    <!-- Modal end -->
                    {{-- </div>
                        </div> --}}
                    <!-- share box end -->

                    <!-- post status start -->
                    <input type="hidden" id="hiddencontainer" name="hiddencontainer" />

                    <?php $statusClick = false; ?>
                    @if ($statusClick == true)
                        <?php $limit = 3; ?>

                    @else
                        <?php $limit = 1; ?>
                    @endif
                    @for ($i = 0; $i < $limit; $i++)
                        <div class="card">
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-1.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="{{ route('profile') }}">Merry Watson</a>
                                    </h6>
                                    <span class="post-time">20 min ago</span>
                                </div>
                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>edit post</button></li>
                                            <li><button>hapus post</button></li>
                                            <li>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#exampleModalLong">
                                                    Laporkan
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- post title start -->
                            <div class="post-content">
                                <h5 style="margin-bottom: 10px">Judul Postingan</h5>
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                    their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites
                                    still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        <div class="col-8">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector"
                                                    href="{{ url('assets/images/post/post-large-2.jpg') }}">
                                                    <img src="{{ url('assets/images/post/post-2.jpg') }}"
                                                        alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-3.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-3.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-4.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-4.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-5.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-5.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="post-meta">
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment" data-toggle="modal"
                                                data-target="#ModalComment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>

                                        </li>
                                        <!-- Button trigger modal -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-4.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">william henry</a></h6>
                                    <span class="post-time">35 min ago</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="plyr__video-embed plyr-video">
                                    <iframe src="https://www.youtube.com/embed/WeA7edXsU40"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="post-meta">
                                    <button class="post-meta-like">
                                        <i class="bi bi-heart-beat"></i>
                                        <span>You and 201 people like this</span>
                                        <strong>201</strong>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>41</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
                                                <i class="bi bi-share"></i>
                                                <span>07</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endfor

                    <div class="dropdown">
                        <h6><span>
                                Tampilkan Semuanya</span></h6>
                    </div>
                    <!-- post status end -->

                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Pengumuman Organisasi</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @for ($i = 0; $i < 4; $i++)
                                        <li class="unorder-list">
                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">IT FEST</a>
                                                </h3>
                                                <p class="list-subtitle">31 Juni 2021</p>
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->



                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Friends Zone</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-10.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                            <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-2.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">marry wither</a></h3>
                                            <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-5.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                            <p class="list-subtitle"><a href="#">drama</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ url('assets/images/profile/profile-small-14.jpg') }}"
                                                        alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                            <p class="list-subtitle"><a href="#">fitness</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="{{ url('assets/images/icons/heart.png') }}"
                                                alt="">
                                            <img class="heart-color"
                                                src="{{ url('assets/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>
            </div>
        </div>
        </div>


        <!-- Modal -->
        {{-- Modal Report --}}
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Laporkan Jawaban</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p><b>Gambar Melanggar Kebijakan</b><br>
                                    Konten ini mengandung gambar yang melanggar kebijakan</p><br>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p><b>Informasi Palsu</b><br>
                                    Mengandung informasi yang tidak terbukti kebenarannya</p><br>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p><b>Konten Dewasa</b><br>
                                    Mengandung seksual eksplisit, kekerasan, serta hal lain yang tidak pantas</p><br>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p><b>Kredensial Tidak Pantas</b><br>
                                    Kredensial penulis menyinggung atau meniru identitas pihak lain</p><br>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p><b>Pelecehan</b><br>
                                    Meremehkan atau memicu permusuhan dengan individu atau kelompok</p><br>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p><b>Spam</b><br>
                                    Mengandung promosi terselubung terkait tautan, jasa, atau produk</p><br>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal">Batal</button>
                        <button type="button" data-toggle="modal" data-target="#modalAlert"
                            data-dismiss="modal">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Report End --}}
        <!-- Modal Comment-->
        <div class="modal fade" id="ModalComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <div class="post-title d-flex align-items-center">

                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-1.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="{{ route('profile') }}">Merry Watson</a>
                                    </h6>
                                    <span class="post-time">20 min ago</span>
                                </div>

                            </div>
                            <footer class="d-block d-lg-none">
                                <div class="footer-area reveal-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mobile-footer-inner d-flex">
                                                    <div class="mobile-frnd-search">
                                                        <button class="search-toggle-btn"><i
                                                                class="flaticon-search"></i></button>
                                                    </div>
                                                    <div class="mob-frnd-search-inner">
                                                        <form class="mob-frnd-search-box d-flex">
                                                            <input type="text" placeholder="Search Your Friends"
                                                                class="mob-frnd-search-field">
                                                        </form>
                                                    </div>
                                                    <div class="card card-small mb-0 active-profile-mob-wrapper">
                                                        <div class="active-profiles-mob-wrapper slick-row-10">
                                                            <div class="active-profile-mobile">
                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="#">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-1.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-8.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-2.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-3.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-4.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-5.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->

                                                                <!-- profile picture end -->
                                                                <div class="single-slide">
                                                                    <div class="profile-thumb active profile-active">
                                                                        <a href="javascript:void(0)">
                                                                            <figure
                                                                                class="profile-thumb-small profile-active">
                                                                                <img src="{{ url('assets/images/profile/profile-small-9.jpg') }}"
                                                                                    alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- profile picture end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </footer>

                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery img-gallery">
                                    <div class="row no-gutters">
                                        <div class="col-8">
                                            <figure class="post-thumb">
                                                <a class="gallery-selector"
                                                    href="{{ url('assets/images/post/post-large-2.jpg') }}">
                                                    <img src="{{ url('assets/images/post/post-2.jpg') }}"
                                                        alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-3.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-3.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-4.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-4.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-12">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector"
                                                            href="{{ url('assets/images/post/post-large-5.jpg') }}">
                                                            <img src="{{ url('assets/images/post/post-5.jpg') }}"
                                                                alt="post image">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <br>
                            <h6>Komentar</h6>
                            <br>
                            <div class="card">

                                <!-- post title start -->
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="{{ url('assets/images/profile/profile-small-3.jpg') }}"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">

                                        <!-- profile picture end -->
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <span class="post-time">15 min ago</span>
                                    </div>


                                </div>
                                <!-- post title start -->
                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for
                                    </p>

                                </div>
                                <br>
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="{{ url('assets/images/profile/profile-small-3.jpg') }}"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">

                                        <!-- profile picture end -->
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <span class="post-time">15 min ago</span>
                                    </div>


                                </div>
                                <!-- post title start -->
                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for
                                    </p>

                                </div>
                            </div>

                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ url('assets/images/profile/profile-small-37.jpg') }}"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true"
                                            placeholder="Say Something" data-toggle="modal" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Comments End --}}

        {{-- Modal Alert Report --}}
        <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Laporan berhasil dikirim
                        <br>
                        <span>Alasan : <p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Ends --}}
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{ url('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ url('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ url('assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ url('assets/js/plugins/slick.min.js') }}"></script>
    <!-- nice select JS -->
    <script src="{{ url('assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- audio video player JS -->
    <script src="{{ url('assets/js/plugins/plyr.min.js') }}"></script>
    <!-- perfect scrollbar js -->
    <script src="{{ url('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!-- light gallery js -->
    <script src="{{ url('assets/js/plugins/lightgallery-all.min.js') }}"></script>
    <!-- image loaded js -->
    <script src="{{ url('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope filter js -->
    <script src="{{ url('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js') }}"> </script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })

        var hiddenValue = document.getElementById(hiddencontainer);
        hiddenValue.value = true;
    </script>

</body>

</html>
