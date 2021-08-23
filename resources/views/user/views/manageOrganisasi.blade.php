<!doctype html>
<html class="no-js" lang="en">

@include('user.views.include.head')
<meta name="author" content="ThemeMakker">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="../admin/assets/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../admin/assets/vendor/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../admin/assets/css/main.css" type="text/css">

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
                                                <button
                                                    onclick="confirm('Yakin keluar?') || event.stopImmediatePropagation()"
                                                    type="submit" class="btn btn-danger btn-block m-2">Keluar
                                                    Organisasi</button>
                                            </form>

                                        @endif
                                        @if ($userAuth->role == 3)
                                            <button type="button" class="btn btn-primary btn-block m-2"
                                                data-toggle="modal" data-target="#exampleModalx">
                                                Edit Organisasi
                                            </button>

                                            <button data-toggle="modal"
                                                data-target="#ModalDeleteOrganisasi{{ $organisasi->id_groups }}"
                                                type="" class="btn btn-danger btn-block m-2">Delete Organisasi</button>
                                            <button type="button" class="btn btn-danger btn-block m-2"
                                                data-toggle="modal" data-target="#ModalOwner">
                                                Ganti Owner
                                            </button>
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

                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">

                    <!-- post status start -->
                    <input type="hidden" id="hiddencontainer" name="hiddencontainer" />
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tanggal Join</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Universitas</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataUser as $item)

                                        <tr>
                                            {{-- <th scope="row">{{ $item->id_reports }}</th> --}}
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->email }}</td>
                                            <td>{{ $time = date('j F Y', strtotime($item->created_at)) }}
                                            <td>
                                                @if ($item->role == 1)
                                                    Member
                                                @elseif ($item->role==2)
                                                    Admin
                                                @elseif ($item->role==3)
                                                    Owner
                                                @endif
                                            </td>
                                            <td>{{ $item->user->universitas->nama }}</td>
                                            <td>
                                                {{-- <button type="danger"></button> --}}
                                                {{-- <button type="button" class="submit-btn btn-sm">Hapus Post</button> --}}
                                                {{-- <button type="button">BAN</button> --}}
                                                @if ($item->user->id_users != Auth::user()->id_users)
                                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                        data-target="#ModalEditUser{{ $item->id_users }}">
                                                        Update
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#ModalKickUser{{ $item->id_users }}">
                                                        Kick
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
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


        {{-- Modal Delete Organisasi --}}
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
        {{-- Modal Delete Organisasi --}}

        {{-- Modal Kick User --}}
        @foreach ($dataUser as $item)

            <div>
                <div class="modal fade" id="ModalKickUser{{ $item->id_users }}" tabindex="-1" role="dialog"
                    aria-labelledby="ModalDeletePost" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="card">
                                    <div class="post-title d-flex align-items-center">
                                        <h6>Peringatan</h6>
                                    </div>
                                    <div class="post-content">
                                        <h5 style="margin-bottom: 10px">Apakah Anda Yakin Mengeluarkan User

                                        </h5>
                                        <h6>{{ $item->user->name }} ?</h6>
                                    </div>
                                    <div class="modal-footer" style="margin-bottom: -20px">
                                        <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                        <form action="{{ route('kickUser', $item->id_users) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="post-share-btn">Kick User</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Comments End --}}
                </div>
            </div>
        @endforeach
        {{-- Modal Kick User --}}

        {{-- Modal Edit User --}}
        @foreach ($dataUser as $item)
            <div class="modal fade" id="ModalEditUser{{ $item->id_users }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalEditPost" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <form action="{{ route('editUser', $item->id_user_groups) }}" method="POST">
                                    @method('PUT')
                                    @csrf

                                    <div class="post-title d-flex align-items-center">
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->

                                        <div class="posted-author col-8">
                                            <h6 class="author">
                                                <a>{{ $item->user->name }}</a>
                                            </h6>
                                        </div>
                                        <div class="col-3">
                                            <label for="role">Role : </label>
                                            <select name="role" id="inputState"
                                                class="form-control block w-100 p-2 mb-2" required>
                                                <option value="1" {{ $item->role == 1 ? 'selected' : '' }}>
                                                    Member
                                                </option>
                                                <option value="2" {{ $item->role == 2 ? 'selected' : '' }}>Admin
                                                </option>
                                            </select>
                                        </div>
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
        {{-- Modal Edit User --}}


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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Organisasi</h5>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
