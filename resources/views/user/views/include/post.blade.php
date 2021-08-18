@foreach ($Data1 as $itemPost)
    <div class="card">
        <div class="post-title d-flex align-items-center">
            <!-- profile picture end -->
            <div class="profile-thumb">
                <a href="#">
                    <figure class="profile-thumb-middle">
                        <img src="user/assets/images/profile/profile-small-1.jpg" alt="profile picture">
                    </figure>
                </a>
            </div>
            <!-- profile picture end -->

            <div class="posted-author">
                <h1 class="author">
                    <a href="{{ route('profile') }}">{{ $itemPost->user->name }}</a>
                    ▶
<<<<<<< HEAD
                    <a href="organisasi/{{$itemPost->group->id_groups}}">{{ $itemPost->group->nama }}</a>
=======
                    <a href="organisasi/{{ $itemPost->group->id_groups }}">{{ $itemPost->group->nama }}</a>
>>>>>>> bfca07cfa7aed48766e4787456435d5b11cd6dee

                    {{ $itemPost->status == '1' ? '▶🔒' : '' }}
                    {{-- 🔒🔓 --}}
                </h1>
                <span class="post-time">
                    {{ $itemPost->created_at->diffForHumans() }}
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
                            <button type="button" data-toggle="modal" data-target="#exampleModalLong">
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

@if ($itemPost->image_url != NULL)
<div class="post-thumb-gallery">
    <figure class="post-thumb img-popup">
        <a href="user/assets/images/post/post-large-1.jpg">
            <img src="user/assets/images/post/post-1.jpg" alt="post image">
        </a>
    </figure>
</div>
@endif

            
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


{{-- Modal Post&Reply --}}
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                                                <div class="profile-thumb active profile-active">
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
                                        <h6 class="author"><a href="profile.html">{{ $komen->user->name }}</a>
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
{{-- Modal Post&Reply --}}

{{-- Modal Edit Post --}}
@foreach ($Data1 as $modalPost)

    <div class="modal fade" id="ModalEditPost{{ $modalPost->id_utas }}" tabindex="-1" role="dialog"
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
                                        <img src="user/assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author">
                                    <a href="{{ route('profile') }}">{{ $modalPost->user->name }}</a>
                                </h6>
                                <span
                                    class="post-time">{{ Carbon\Carbon::parse($modalPost->waktu)->diffForHumans() }}</span>
                            </div>
                        </div>

                        <!-- post title start -->
                        <div class="post-content">
                            <textarea name="share" class="share-field-big custom-scroll" aria-disabled="true"
                                data-toggle="modal" id="email">{{ $modalPost->konten }}</textarea>
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
    </div>
@endforeach
{{-- Modal Edit Post --}}

{{-- Modal Report --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
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
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <p><b>Informasi Palsu</b><br>
                            Mengandung informasi yang tidak terbukti kebenarannya</p><br>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
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
                <button type="button" data-toggle="modal" data-target="#modalAlert" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Report --}}

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
{{-- Modal Alert Report --}}
