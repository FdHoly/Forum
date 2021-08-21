@forelse ($post as $itemPost)
    <div class="card">
        <div class="post-title d-flex align-items-center">
            <!-- profile picture end -->
            <div class="profile-thumb">
                <a
                    href="{{ Auth::user()->id_users === $itemPost->user->id_users ? route('profile') : route('profileID', $itemPost->user->name) }}">
                    <figure class="profile-thumb-middle">
                        <img src="{{ Storage::url($itemPost->user->profil_image_url) }}" alt="ppUser">
                    </figure>
                </a>
            </div>
            <!-- profile picture end -->
            <div class="posted-author">
                <h1 class="author">
                    <a
                        href="{{ Auth::user()->id_users === $itemPost->user->id_users ? route('profile') : route('profileID', $itemPost->user->name) }}">{{ $itemPost->user->name }}</a>
                    ▶
                    <a href="{{ route('detailOrg', $itemPost->group->id_groups) }}">{{ $itemPost->group->nama }}</a>

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
                        @if ($itemPost->user->id_users === Auth::user()->id_users)
                            <li><button type="button" data-toggle="modal"
                                    data-target="#ModalEditPost{{ $itemPost->id_utas }}">
                                    Edit Post
                                </button></li>
                            <li><button>hapus post</button></li>
                        @else
                            <li>
                                <button type="button" data-toggle="modal"
                                    data-target="#exampleModalLong{{ $itemPost->id_utas }}">
                                    Laporkan
                                </button>
                            </li>
                        @endif

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

            {{-- Check Ada Foto Apa Ga --}}
            @if ($itemPost->image_url)
                <div class="post-thumb-gallery">
                    <figure class="post-thumb img-popup">
                        <a href={{ Storage::url($itemPost->image_url) }}>
                            <img src={{ Storage::url($itemPost->image_url) }} alt="post image">
                        </a>
                    </figure>
                </div>
            @endif
            {{-- Check Ada Foto Apa Ga --}}

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
@empty
    <div class="card">
        <p class="text-center">Belum ada post</p>
    </div>
@endforelse


{{-- Modal Post&Reply --}}
@foreach ($post as $itemPost1)
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
                                <a href="{{ route('profile') }}">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ Storage::url($itemPost1->user->profil_image_url) }}"
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

                                    {{ $itemPost1->created_at->diffForHumans() }}

                                </span>
                            </div>

                        </div>


                        <!-- post title start -->
                        <div class="post-content">
                            <p class="post-desc">
                                {{ $itemPost1->konten }}
                            </p>

                            @if ($itemPost1->image_url !== null)
                                <div class="post-thumb-gallery">
                                    <figure class="post-thumb img-popup">
                                        <a href={{ Storage::url($itemPost1->image_url) }}>
                                            <img src={{ Storage::url($itemPost1->image_url) }} alt="post image">
                                        </a>
                                    </figure>
                                </div>
                            @endif



                        </div>
                        <br>
                        <h6>Komentar</h6>
                        <br>



                        <div class="card">
                            @forelse ($itemPost1->replyutas as $komen)
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a
                                            href="{{ Auth::user()->id_users === $komen->user->id_users ? route('profile') : route('profileID', $komen->user->name) }}">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{ Storage::url($komen->user->profil_image_url) }}"
                                                    alt="ppUser">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <!-- profile picture end -->
                                        <h6 class="author">
                                            <a
                                                href="{{ Auth::user()->id_users === $komen->user->id_users ? route('profile') : route('profileID', $komen->user->name) }}">{{ $komen->user->name }}</a>
                                        </h6>
                                        <span class="post-time">{{ $komen->created_at->diffForHumans() }}</span>
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
                                <a href="{{route('profile')}}">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ Storage::url(Auth::user()->profil_image_url) }}" alt="ppUser">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box" action="{{ route('replyPost', $itemPost1->id_utas) }}" method="POST">
                                    @csrf
                                    <textarea name="konten" class="share-text-field" aria-disabled="true"
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
@foreach ($post as $modalPost)
    <div class="modal fade" id="ModalEditPost{{ $modalPost->id_utas }}" tabindex="-1" role="dialog"
        aria-labelledby="ModalEditPost" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <form action="{{ route('utasUpdate', $modalPost->id_utas) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="{{ Storage::url(Auth::user()->profil_image_url) }}"
                                                alt="ppUser">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author col-8">
                                    <h6 class="author">
                                        <a href="{{ route('profile') }}">{{ $modalPost->user->name }}</a>
                                    </h6>
                                    <span
                                        class="post-time">{{ Carbon\Carbon::parse($modalPost->created_at)->diffForHumans() }}</span>
                                </div>
                                <div class="col-3">
                                    <select name="status" id="inputState" class="form-control block w-100 p-2 mb-2"
                                        required>
                                        <option value="0" {{ $modalPost->status ? '' : 'selected' }}>
                                            Public
                                        </option>
                                        <option value="1" {{ $modalPost->status ? 'selected' : '' }}>Private</option>
                                    </select>
                                </div>
                            </div>

                            <!-- post title start -->
                            <div class="post-content">
                                <h5 style="margin-bottom: 10px">{{ $modalPost->judul }}</h5>
                                <textarea name="konten" class="share-field-big custom-scroll" aria-disabled="true"
                                    data-toggle="modal" id="konten">{{ $modalPost->konten }}</textarea>
                                {{-- <div class="post-thumb-gallery">
                                <a href={{ Storage::url($itemPost->image_url) }}>
                                    <img src={{ Storage::url($itemPost->image_url) }} alt="post image">
                                </a>
                            </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                <button type="submit" class="post-share-btn">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- Modal Edit Post --}}

{{-- Modal Report --}}

@foreach ($post as $reportUtas)
    <div class="modal fade" id="exampleModalLong{{ $reportUtas->id_utas }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Laporkan Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('reportPost') }}" method="POST" id="reportPost" name="reportPost">
                    @csrf
                    <div class="modal-body">

                        <input type="hidden" value=" {{ $reportUtas->id_users }} " name="id_users">
                        <input type="hidden" value=" {{ $reportUtas->id_utas }} " name="id_utas">
                        <input type="hidden" value=" {{ $reportUtas->id_groups }} " name="id_groups">

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas"
                                value="Gambar Melanggar Kebijakan">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <p><b>Gambar Melanggar Kebijakan</b><br>
                                    Konten ini mengandung gambar yang melanggar kebijakan</p>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas"
                                value="Informasi Palsu">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <p><b>Informasi Palsu</b><br>
                                    Mengandung informasi yang tidak terbukti kebenarannya</p>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas"
                                value="Konten Dewasa" checked>
                            <label class="form-check-label" for="flexRadioDefault3">
                                <p><b>Konten Dewasa</b><br>
                                    Mengandung seksual eksplisit, kekerasan, serta hal lain yang tidak pantas</p>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas"
                                value="Kredensial Tidak Pantas">
                            <label class="form-check-label" for="flexRadioDefault4">
                                <p><b>Kredensial Tidak Pantas</b><br>
                                    Kredensial penulis menyinggung atau meniru identitas pihak lain</p>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas"
                                value="Pelecehan">
                            <label class="form-check-label" for="flexRadioDefault5">
                                <p><b>Pelecehan</b><br>
                                    Meremehkan atau memicu permusuhan dengan individu atau kelompok</p>
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="alasan" id="reportUtas" value="Spam">
                            <label class="form-check-label" for="flexRadioDefault6">
                                <p><b>Spam</b><br>
                                    Mengandung promosi terselubung terkait tautan, jasa, atau produk</p>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style="margin-right: 10px" data-dismiss="modal">Batal</button>
                        <button type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
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
                <span>Alasan : <p id="alasan">
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Alert Report --}}
