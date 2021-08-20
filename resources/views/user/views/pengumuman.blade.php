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
            <div class="profile-banner-large bg-img" data-bg="user/assets/images/banner/profile-banner.jpg">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="profile.html">
                                        <img src="user/assets/images/profile/profile-1.jpg" alt="profile picture">
                                    </a>
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
                                <h4 class="widget-title">{{ $prof->name }}</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        {{-- <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a --}}

                                        <p>{{ $prof->biodata ?? 'Belum ada biodata' }}</p>
                                        <ul class="author-into-list">
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
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="user/assets/images/profile/profile-small-33.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="unorder-list-info">
                                                    <h3 class="list-title"><a href="#">{{ $itemOrg->nama }}</a></h3>
                                                    <p class="list-subtitle"><a
                                                            href="#">{{ $itemOrg->universitas->nama }}</a></p>
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
                        @foreach (Auth::user()->group as $group)
                            @if ($group->pivot->role > 1)
                                <div class="card card-small">
                                    <div class="share-box-inner">
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->

                                        <!-- share content box start -->
                                        <div class="share-content-box w-100">
                                            <form class="share-text-box">
                                                <textarea name="share" class="share-text-field" aria-disabled="true"
                                                    placeholder="Say Something" data-toggle="modal"
                                                    data-target="#textbox" id="email"></textarea>
                                                <button class="btn-share" type="submit">share</button>
                                            </form>
                                        </div>
                                        <!-- share content box end -->

                                        <!-- Modal start -->
                                        <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Share Your Mood</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    {{-- Formulir Share --}}
                                                    <form action="{{ route('createPengumuman') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body custom-scroll">

                                                            <input name="judul" type="text" required
                                                                class="block w-100 p-2 mb-2 my-judul"
                                                                placeholder="Judul">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <label for="organisasi"></label>
                                                                    <select name="id_groups" id="organisasi"
                                                                        class="form-control block w-100 p-2 mb-2"
                                                                        required>
                                                                        <option value="">Pilih Organisasi</option>
                                                                        @foreach ($admUser as $item)
                                                                            @foreach ($item->group->usergroup as $group)
                                                                                @if ($group->role > 1)

                                                                                    <option
                                                                                        value="{{ $item->id_groups }}">
                                                                                        {{ $item->group->nama }}
                                                                                    </option>
                                                                                @endif
                                                                            @endforeach


                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="organisasi"></label>
                                                                    <select name="tipe" id="tipe"
                                                                        class="form-control block w-100 p-2 mb-2"
                                                                        required>
                                                                        <option value="">Pilih Thread</option>
                                                                        <option value="pengumuman">Pengumuman</option>
                                                                        <option value="acara">Acara</option>
                                                                        <option value="rapat">Rapat</option>


                                                                    </select>

                                                                </div>
                                                            </div>
                                                            {{-- <div class="col">
                                                                <select id="inputState"
                                                                    class="form-control block w-100 p-2 mb-2">
                                                                    <option selected>Pengumuman</option>
                                                                    <option>Agenda Acara</option>
                                                                    <option>Agenda Rapat</option>
                                                                </select>
                                                            </div> --}}
                                                            <textarea name="konten"
                                                                class="share-field-big custom-scroll"
                                                                placeholder="Say Something" required></textarea>


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
                                    </div>
                            @break
                    </div>
                    @endif
                    @endforeach
                    <!-- Modal end -->
                    {{-- <div class="filter-menu">
                                    <button class="active" data-filter="*">All</button>

                                </div> --}}

                    <div class=" secondary-menu-2 bg-white mb-4 d-flex justify-content-center">

                        <div class="filter-menu">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Pengumuman </button>
                        </div>
                        <div class="filter-menu">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Acara </button>

                        </div>
                        <div class="filter-menu">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Rapat </button>

                        </div>
                        <div class="post-settings-bar">
                        </div>
                    </div>

                    <div id="accordion">


                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            @foreach ($pengumuman as $item)
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
                                            <h6 class="author">
                                                {{ $item->judul }} ▶
                                                <a
                                                    href="organisasi/{{ $item->id_groups }}">{{ $item->group->nama }}</a>

                                            </h6>
                                            <span
                                                class=" post-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </div>

                                        <div class="post-settings-bar">
                                            @foreach ($item->group->usergroup as $group)
                                                @if ($group->role > 1)
                                                    <img class="icon"
                                                        src="https://image.flaticon.com/icons/png/512/1214/1214428.png"
                                                        alt="delete">
                                                @break
                                            @endif
                            @endforeach

                        </div>
                    </div>
                    <!-- post title start -->
                    <div class="post-content">
                        <p class="post-desc pb-0">
                            {{ $item->konten }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                @foreach ($acara as $item)
                    <div class="card">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="user/assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author">
                                    {{ $item->judul }} ▶
                                    <a href="organisasi/{{ $item->id_groups }}">{{ $item->group->nama }}</a>

                                </h6>
                                <span
                                    class=" post-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            </div>

                            <div class="post-settings-bar">
                                @foreach ($item->group->usergroup as $group)
                                    @if ($group->role > 1)
                                        <img class="icon"
                                            src="https://image.flaticon.com/icons/png/512/1214/1214428.png"
                                            alt="delete">
                                    @break
                                @endif
                @endforeach

            </div>
        </div>
        <!-- post title start -->
        <div class="post-content">
            <p class="post-desc pb-0">
                {{ $item->konten }}
            </p>
        </div>
        </div>
        @endforeach
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            @foreach ($rapat as $item)
                <div class="card">
                    <!-- post title start -->
                    <div class="post-title d-flex align-items-center">
                        <!-- profile picture end -->
                        <div class="profile-thumb">
                            <a href="#">
                                <figure class="profile-thumb-middle">
                                    <img src="user/assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                </figure>
                            </a>
                        </div>
                        <!-- profile picture end -->

                        <div class="posted-author">
                            <h6 class="author">
                                {{ $item->judul }} ▶
                                <a href="organisasi/{{ $item->id_groups }}">{{ $item->group->nama }}</a>

                            </h6>
                            <span
                                class=" post-time">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                        </div>

                        <div class="post-settings-bar">
                            @foreach ($item->group->usergroup as $group)
                                @if ($group->role > 1)
                                    <img class="icon" src="https://image.flaticon.com/icons/png/512/1214/1214428.png"
                                        alt="delete">
                                @break
                            @endif
            @endforeach

        </div>
        </div>
        <!-- post title start -->
        <div class="post-content">
            <p class="post-desc pb-0">
                {{ $item->konten }}
            </p>
        </div>
        </div>
        @endforeach
        </div>
        </div>



        <!-- post status start -->


        <!-- post status end -->
        </div>
        {{-- <x-events :pengumuman="$pengumuman" :acara="$acara" :rapat="$rapat" /> --}}


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
