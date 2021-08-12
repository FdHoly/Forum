<!doctype html>
<html class="no-js" lang="en">


@include('user.views.include.head')

<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')

    </header>
    <!-- header area end -->
    <!-- header area start -->
    <!-- header area end -->

    <main>

        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card card-profile widget-item p-0">
                                <div class="profile-banner">
                                    <figure class="profile-banner-small">
                                        <a href="{{ route('profile') }}">
                                            <img src="user/assets/images/banner/banner-small.jpg" alt="">
                                        </a>
                                        <a href="{{ route('profile') }}" class="profile-thumb-2">
                                            <img src="user/assets/images/profile/profile-midle-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="profile-desc text-center">
                                        <h6 class="author"><a href="{{ route('profile') }}">Dimbel Lebmid</a></h6>
                                        <p>Any one can join with but Social network us if you want Any one can join with
                                            us if you want</p>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item start -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">group you may like</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">

                                        @foreach ($Data6 as $itemGroup)
                                            <li class="unorder-list">
                                                <!-- profile picture end -->

                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="user/assets/images/profile/profile-small-33.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="unorder-list-info">
                                                    <h3 class="list-title"><a href="#">{{ $itemGroup->nama }}</a></h3>
                                                    <p class="list-subtitle"><a
                                                            href="#">{{ $itemGroup->universitas->nama }}</a></p>
                                                </div>

                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="card widget-item">
                                <h4 class="widget-title">Teman dalam Grup</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/assets/images/profile/profile-small-33.jpg"
                                                            alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
                                                <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="user/assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="user/assets/images/icons/heart-color.png"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/assets/images/profile/profile-small-30.jpg"
                                                            alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                                <p class="list-subtitle"><a href="#">2 mutual</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="user/assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="user/assets/images/icons/heart-color.png"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/assets/images/profile/profile-small-5.jpg"
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
                                                <img class="heart" src="user/assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="user/assets/images/icons/heart-color.png"
                                                    alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/assets/images/profile/profile-small-29.jpg"
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
                                                <img class="heart" src="user/assets/images/icons/heart.png" alt="">
                                                <img class="heart-color" src="user/assets/images/icons/heart-color.png"
                                                    alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="user/assets/images/profile/profile-small-37.jpg"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true"
                                            placeholder="Say Something" data-toggle="modal" data-target="#textbox"
                                            id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {{-- Formulir Share --}}
                                            <form action="">
                                                <div class="modal-body custom-scroll">
                                                    <input type="text" class="block w-100 p-2 mb-2 my-judul"
                                                        placeholder="Judul">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select id="inputState"
                                                                class="form-control block w-100 p-2 mb-2">
                                                                <option selected>Pilih Organisasi</option>
                                                                <option value="1">KBMTI</option>
                                                                <option>KBMPTI</option>
                                                                <option>KBMSI</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select id="inputState"
                                                                class="form-control block w-100 p-2 mb-2">
                                                                <option selected>Public</option>
                                                                <option>Private</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <textarea name="share" class="share-field-big custom-scroll"
                                                        placeholder="Say Something"></textarea>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Unggah Foto</label>
                                                        <input type="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="post-share-btn"
                                                        data-dismiss="modal">cancel</button>
                                                    <button type="submit" class="post-share-btn">Post</button>
                                                </div>
                                            </form>
                                            {{-- Formulir Share --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                        <!-- share box end -->
                        <div class="dropdown">
                            <h6><span>Menampilkan Semua Postingan</span></h6>
                            {{-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> --}}
                            <img src="https://image.flaticon.com/icons/png/512/3126/3126539.png" onclick="myFunction()"
                                class="filter__icon">
                            <div id="myDropdown" class="dropdown-content">
                                <a href="/">Semua</a>
                                <a href="/filter=organisasi">Organisasi</a>
                                <a href="/filter=universitas">Universitas</a>
                            </div>
                        </div>
                        <!-- post status start -->
                        <!-- post title start -->
                        {{-- @for ($i = 0; $i < 8; $i++) --}}
                        @foreach ($Data1 as $itemPost)
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="user/assets/images/profile/profile-small-1.jpg"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h1 class="author">
                                            <a href="{{ route('profile') }}">{{ $itemPost->user->name }}</a>
                                            ▶
                                            <a href="organisasi/{{$itemPost->group->id_groups}}">{{ $itemPost->group->nama }}</a>

                                            {{ $itemPost->status == '1' ? '▶🔒' : '' }}
                                            {{-- 🔒🔓 --}}
                                        </h1>
                                        <span class="post-time">
                                            {{ Carbon\Carbon::parse($itemPost->waktu)->diffForHumans() }}
                                        </span>
                                    </div>
                                    <div class="post-settings-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="post-settings arrow-shape">
                                            <ul>
                                                <li><button type="button" data-toggle="modal"
                                                        data-target="#ModalEditPost{{ $itemPost->id_utas }}">
                                                        Edit Post
                                                    </button></li>
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
                                    <h5 style="margin-bottom: 10px">{{ $itemPost->judul }}</h5>
                                    <p class="post-desc">
                                        {{ $itemPost->konten }}
                                    </p>
                                    <div class="post-thumb-gallery">
                                        <figure class="post-thumb img-popup">
                                            <a href="user/assets/images/post/post-large-1.jpg">
                                                <img src="user/assets/images/post/post-1.jpg" alt="post image">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="comment-share-meta">
                                            <li>
                                                <button class="post-comment" data-toggle="modal"
                                                    data-target="#ModalComment{{ $itemPost->id_utas }}">
                                                    <i class="bi bi-chat-bubble"></i>
                                                    <span>{{ $itemPost->replyutas->count() }}</span>
                                                </button>

                                            </li>
                                            <!-- Button trigger modal -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="col-lg-3 order-3">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Pengumuman Terbaru</h4>
                                <div class="widget-body">
                                    <div id="chatScroll" class="nano has-scrollbar"
                                        style="height:300px; overflow-y: scroll;">
                                        <ul class="like-page-list-wrapper">
                                            {{-- @for ($i = 0; $i < 2; $i++) --}}

                                            @foreach ($Data2 as $itemPengumuman)
                                                <li class="unorder-list">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <a href="#">
                                                            <figure class="profile-thumb-small">
                                                                <img src="user/assets/images/profile/profile-small-9.jpg"
                                                                    alt="profile picture">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <!-- profile picture end -->
                                                    <div class="unorder-list-info">
                                                        <h3 class="list-title"><a href="" data-toggle="modal"
                                                                data-target="#ModalPengumuman">{{ $itemPengumuman->judul }}</a>
                                                        </h3>
                                                        <h4 class="list-subtitle">
                                                            {{ $itemPengumuman->group->nama }}
                                                        </h4>
                                                        <p class="list-subtitle">

                                                            {{ $time = date('j F Y', strtotime($itemPengumuman->waktu)) }}
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                            {{-- @endfor --}}

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Acara Terbaru</h4>
                                <div class="widget-body">
                                    <div id="chatScroll" class="nano has-scrollbar"
                                        style="height:300px; overflow-y: scroll;">
                                        <ul class="like-page-list-wrapper">
                                            @foreach ($Data3 as $itemAcara)

                                                <li class="unorder-list">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <a href="#">
                                                            <figure class="profile-thumb-small">
                                                                <img src="user/assets/images/profile/profile-small-9.jpg"
                                                                    alt="profile picture">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <!-- profile picture end -->
                                                    <div class="unorder-list-info">
                                                        <h3 class="list-title"><a href="" data-toggle="modal"
                                                                data-target="#ModalPengumuman">{{ $itemAcara->judul }}</a>
                                                        </h3>
                                                        <h4 class="list-subtitle">
                                                            {{ $itemAcara->group->nama }}
                                                        </h4>
                                                        <p class="list-subtitle">
                                                            {{ $time = date('j F Y', strtotime($itemAcara->waktu)) }}
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Undangan Rapat</h4>
                                <div class="widget-body">
                                    <div id="chatScroll" class="nano has-scrollbar"
                                        style="height:300px; overflow-y: scroll;">
                                        <ul class="like-page-list-wrapper">
                                            @foreach ($Data4 as $itemRapat)

                                                <li class="unorder-list">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <a href="#">
                                                            <figure class="profile-thumb-small">
                                                                <img src="user/assets/images/profile/profile-small-9.jpg"
                                                                    alt="profile picture">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <!-- profile picture end -->
                                                    <div class="unorder-list-info">
                                                        <h3 class="list-title"><a href="" data-toggle="modal"
                                                                data-target="#ModalPengumuman">{{ $itemRapat->judul }}</a>
                                                        </h3>
                                                        <h4 class="list-subtitle">
                                                            {{ $itemRapat->group->nama }}
                                                        </h4>
                                                        <p class="list-subtitle">
                                                            {{ $time = date('j F Y', strtotime($itemRapat->waktu)) }}
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
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

        <!-- Modal Comment-->
        {{-- <div class="modal fade" id="ModalComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true"> --}}
        {{-- Big Changes --}}
        @foreach ($Data5 as $itemPost1)
            <!-- Modal Comment-->
            <div class="modal fade" id="ModalComment{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">

                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{ asset('user/assets/images/profile/profile-small-1.jpg') }}"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author">
                                            <a href="{{ route('profile') }}">{{ $itemPost1->user->name }}</a>
                                        </h6>
                                        <span class="post-time">

                                            {{ Carbon\Carbon::parse($itemPost1->waktu)->diffForHumans() }}

                                        </span>
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
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="#">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-1.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-8.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-2.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-3.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-4.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-5.jpg') }}"
                                                                                        alt="profile picture">
                                                                                </figure>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- profile picture end -->

                                                                    <!-- profile picture end -->
                                                                    <div class="single-slide">
                                                                        <div
                                                                            class="profile-thumb active profile-active">
                                                                            <a href="javascript:void(0)">
                                                                                <figure
                                                                                    class="profile-thumb-small profile-active">
                                                                                    <img src="{{ url('user/assets/images/profile/profile-small-9.jpg') }}"
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
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for 'lorem ipsum' will uncover many web
                                        sites
                                        still
                                        in their infancy.
                                    </p>
                                    <div class="post-thumb-gallery img-gallery">
                                        <div class="row no-gutters">
                                            <div class="col-8">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector"
                                                        href="{{ url('user/assets/images/post/post-large-2.jpg') }}">
                                                        <img src="{{ url('user/assets/images/post/post-2.jpg') }}"
                                                            alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <figure class="post-thumb">
                                                            <a class="gallery-selector"
                                                                href="{{ url('user/assets/images/post/post-large-3.jpg') }}">
                                                                <img src="{{ url('user/assets/images/post/post-3.jpg') }}"
                                                                    alt="post image">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="col-12">
                                                        <figure class="post-thumb">
                                                            <a class="gallery-selector"
                                                                href="{{ url('user/assets/images/post/post-large-4.jpg') }}">
                                                                <img src="{{ url('user/assets/images/post/post-4.jpg') }}"
                                                                    alt="post image">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="col-12">
                                                        <figure class="post-thumb">
                                                            <a class="gallery-selector"
                                                                href="{{ url('user/assets/images/post/post-large-5.jpg') }}">
                                                                <img src="{{ url('user/assets/images/post/post-5.jpg') }}"
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

                                    @forelse ($itemPost1->replyutas as $komen)
                                        <div class="post-title d-flex align-items-center">
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ url('user/assets/images/profile/profile-small-3.jpg') }}"
                                                            alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->
                                            <div class="posted-author">
                                                <!-- profile picture end -->
                                                <h6 class="author"><a
                                                        href="profile.html">{{ $komen->user->name }}</a>
                                                </h6>
                                                <span
                                                    class="post-time">{{ Carbon\Carbon::parse($komen->waktu)->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                        <!-- post title start -->
                                        <div class="post-content">
                                            <p class="post-desc pb-0">
                                                {{ $komen->konten }}
                                            </p>

                                        </div>
                                        <br>
                                    @empty
                                        <p class="post-desc pb-0">
                                            Tidak ada komentar
                                        </p>
                                    @endforelse

                                </div>

                                <div class="share-box-inner">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{ url('user/assets/images/profile/profile-small-37.jpg') }}"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- share content box start -->
                                    <div class="share-content-box w-100">
                                        <form class="share-text-box" action="" method="POST">
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
        @endforeach
        {{-- Modal Pengumuman --}}
        <div class="modal fade" id="ModalPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="user/assets/images/profile/profile-small-3.jpg"
                                                alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Judul Pengumuman</a></h6>
                                    <span class="post-time">15 min ago</span>
                                </div>

                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc pb-0">
                                    Ini nanti berisi mengenai informasi apa yang terdapat dari sebuah pengumuman
                                    yang
                                    ada di home
                                </p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        {{-- Modal Pengumuman --}}

        {{-- Modal Edit Post --}}
        @foreach ($Data1 as $itemPost)

            <div class="modal fade" id="ModalEditPost{{ $itemPost->id_utas }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalEditPost" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="user/assets/images/profile/profile-small-1.jpg"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author">
                                            <a href="{{ route('profile') }}">{{ $itemPost->user->name }}</a>
                                        </h6>
                                        <span
                                            class="post-time">{{ Carbon\Carbon::parse($itemPost->waktu)->diffForHumans() }}</span>
                                    </div>
                                </div>

                                <!-- post title start -->
                                <div class="post-content">
                                    <textarea name="share" class="share-field-big custom-scroll" aria-disabled="true"
                                        data-toggle="modal" id="email">{{ $itemPost->konten }}</textarea>
                                    <div class="post-thumb-gallery">
                                        <img src="user/assets/images/post/post-1.jpg" alt="post image">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                    <button type="button" class="post-share-btn">Simpan</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        @endforeach


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

    @include('user.views.include.modjs')

    <script>
        /* When the user clicks on the button,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }


        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })


        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

</body>

</html>
