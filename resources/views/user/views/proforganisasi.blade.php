<!doctype html>
<html class="no-js" lang="en">

@include('user.views.include.head')
<link rel="stylesheet" href="{{ asset('user/assets/css/vendor/bicon.min.css') }}">


<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">

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
                                        <img src="{{ Storage::url($organisasi->logo_url) }}" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                            <div class="card widget-item">
                                <h4 class="widget-title">
                                    {{ $organisasi->nama }}
                                </h4>

                                {{-- <h4 >Keluarga Besar Mahasiswa Teknologi Informasi</h4> --}}
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>{{ $organisasi->deskripsi }}</p>
                                        <ul class="author-into-list">
                                            <li><i class="bi bi-home"></i><span
                                                    style="margin-left: 10px; font-weight: 500; font-size: 15px">{{ $organisasi->universitas->nama }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget-body text-center mt-3">
                                    @if ($userGroup->contains($organisasi->id_groups))
                                        {{-- <a href="organisasi/{{ $organisasi->id_groups }}" class="btn mt-3 mb-3">Member</a> --}}
                                        <button class="btn btn-success btn-block m-2" disabled>Sudah Tergabung </button>
                                        @if ($userAuth->role != 3)

                                            <form action="{{ route('leaveOrg', $organisasi->id_groups) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button data-toggle="modal"
                                                    data-target="#ModalLeave{{ $organisasi->id_groups }}"
                                                    type="button" class="btn btn-danger btn-block m-2">Keluar
                                                    Organisasi</button>
                                            </form>

                                        @endif
                                        @if ($userAuth->role == 3)
                                            {{-- <button type="button" class="btn btn-primary btn-block m-2"
                                                data-toggle="modal" data-target="#exampleModalx">
                                                Edit Organisasi
                                            </button> --}}
                                            <a href="{{ route('manageOrg', $organisasi->id_groups) }}">
                                                <button type="button" class="btn btn-primary btn-block m-2">
                                                    Manage Organisasi
                                                </button>
                                            </a>
                                            {{-- <button data-toggle="modal"
                                                data-target="#ModalDeleteOrganisasi{{ $organisasi->id_groups }}"
                                                type="" class="btn btn-danger btn-block m-2">Delete Organisasi</button> --}}
                                        @endif
                                    @else
                                        <form action="{{ route('join', $organisasi->id_groups) }}" method="POST"
                                            class="text-center">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-block m-2">
                                                Gabung </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Pengikut</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        @foreach ($organisasi->usergroup as $dataUser)
                                            <li class="unorder-list">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="{{ Storage::url($dataUser->user->profil_image_url) }}"
                                                                alt="ppUser">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->
                                                <div class="unorder-list-info">
                                                    <h3 class="list-title align-items-center"><a
                                                            href="{{ Auth::user()->id_users === $dataUser->user->id_users ? route('profile') : route('profileID', $dataUser->user->email) }}">{{ $dataUser->user->name }}</a>
                                                    </h3>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">

                    <!-- post status start -->
                    <input type="hidden" id="hiddencontainer" name="hiddencontainer" />

                    <x-post :post="$organisasi->utas" />

                    {{-- <div class="dropdown">
                        <h6><span>
                                Tampilkan Semuanya</span></h6>
                    </div> --}}

                </div>

                {{-- @include("user.views.include.event") --}}
                <x-events :pengumuman="$organisasi->pengumuman" :acara="$organisasi->acara"
                    :rapat="$organisasi->rapat" />
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


        {{-- Modal Delete Organisasi --}}
        {{-- @foreach ($organisasi as $itemPost1) --}}
        <!-- Modal Comment-->
        <div>
            <div class="modal fade" id="ModalDeleteOrganisasi{{ $organisasi->id_groups }}" tabindex="-1"
                role="dialog" aria-labelledby="ModalDeletePost" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <h6>Peringatan</h6>
                                </div>
                                <div class="post-content">
                                    <h5 style="margin-bottom: 10px">Apakah Anda Yakin Menghapus Organisasi Ini ?
                                    </h5>
                                    <h6 style="margin-bottom: 10px">Semua konten dalam organisasi akan terhapus termasuk
                                        pengikut
                                    </h6>

                                </div>
                                <div class="modal-footer" style="margin-bottom: -20px">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('deleteOrg', $organisasi->id_groups) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="post-share-btn">Hapus Organisasi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Comments End --}}
            </div>
        </div>
        {{-- @endforeach --}}
        {{-- Modal Delete Organisasi --}}


        {{-- Modal Leave Organisasi --}}
        <!-- Modal Comment-->
        <div>
            <div class="modal fade" id="ModalLeave{{ $organisasi->id_groups }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalLeave" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <h6>Peringatan</h6>
                                </div>
                                <div class="post-content">
                                    <h5 style="margin-bottom: 10px">Apakah Anda Yakin Keluar Dari Organisasi Ini ?
                                    </h5>
                                </div>
                                <div class="modal-footer" style="margin-bottom: -20px">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('leaveOrg', $organisasi->id_groups) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="post-share-btn">Keluar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Comments End --}}
            </div>
        </div>
        {{-- Modal Leave Organisasi --}}

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

        {{-- Modal Edit Org --}}
    </main>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form action="{{ route('editOrg', $organisasi->id_groups) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <label for="nama_grup">Nama Organisasi</label>
                                    <input type="text" name="nama_grup" id="nama_grup"
                                        class="single-field form-control " value="{{ $organisasi->nama }}" disabled
                                        required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="deskripsi">Deskripsi Organisasi</label>
                                    <input type="text" name="deskripsi" id="deskripsi"
                                        class="single-field form-control " value="{{ $organisasi->deskripsi }}"
                                        required>
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="customFile">Logo Organisasi</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="logo_url">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>

                            </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



    <!-- JS
============================================ -->

    @include('user.views.include.modjs')
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })

        var hiddenValue = document.getElementById(hiddencontainer);
        hiddenValue.value = true;
    </script>

</body>

</html>
