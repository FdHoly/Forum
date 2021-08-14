<div class="col-lg-3 order-3">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Pengumuman Terbaru</h4>
            <div class="widget-body">
                <div id="chatScroll" class="nano has-scrollbar" style="height:300px; overflow-y: scroll;">
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
                                            data-target="#ModalPengumuman{{ $itemPengumuman->id_announcements }}">{{ $itemPengumuman->judul }}</a>
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
                <div id="chatScroll" class="nano has-scrollbar" style="height:300px; overflow-y: scroll;">
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
                                            data-target="#ModalAcara{{ $itemAcara->id_events }}">{{ $itemAcara->judul }}</a>
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
            <h4 class="widget-title">Jadwal Rapat</h4>
            <div class="widget-body">
                <div id="chatScroll" class="nano has-scrollbar" style="height:300px; overflow-y: scroll;">
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
                                            data-target="#ModalRapat{{ $itemRapat->id_meetings }}">{{ $itemRapat->judul }}</a>
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

{{-- Modal 3 SubPost --}}
{{-- Modal Pengumuman --}}
@foreach ($Data2 as $itemPengumuman)
    <div class="modal fade" id="ModalPengumuman{{ $itemPengumuman->id_announcements }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                        <img src="user/assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">{{ $itemPengumuman->group->nama }}
                                        ▶
                                        {{ $itemPengumuman->judul }}</a>
                                </h6>
                                <span
                                    class="post-time">{{ Carbon\Carbon::parse($itemPengumuman->waktu)->diffForHumans() }}</span>
                            </div>

                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                {{ $itemPengumuman->konten }}
                            </p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endforeach
{{-- Modal Pengumuman --}}

{{-- Modal Acara --}}
@foreach ($Data3 as $itemAcara)
    <div class="modal fade" id="ModalAcara{{ $itemAcara->id_events }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                        <img src="user/assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">{{ $itemAcara->group->nama }}
                                        ▶
                                        {{ $itemAcara->judul }}</a>
                                </h6>
                                <span
                                    class="post-time">{{ Carbon\Carbon::parse($itemAcara->waktu)->diffForHumans() }}</span>
                            </div>

                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                {{ $itemAcara->konten }}
                            </p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endforeach
{{-- Modal Acara --}}

{{-- Modal Rapat --}}
@foreach ($Data4 as $itemRapat)
    <div class="modal fade" id="ModalRapat{{ $itemRapat->id_meetings }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                        <img src="user/assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="profile.html">{{ $itemRapat->group->nama }}
                                        ▶
                                        {{ $itemRapat->judul }}</a>
                                </h6>
                                <span
                                    class="post-time">{{ Carbon\Carbon::parse($itemRapat->waktu)->diffForHumans() }}</span>
                            </div>

                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc pb-0">
                                {{ $itemRapat->konten }}
                            </p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endforeach
{{-- Modal Rapat --}}
{{-- ^ Modal 3 SubPost --}}
