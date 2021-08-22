<!doctype html>
<html class="no-js" lang="en">

@include('user.views.include.head')
{{-- Latest --}}
<meta name="author" content="ThemeMakker">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="../admin/assets/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../admin/assets/vendor/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../admin/assets/css/main.css" type="text/css">
{{-- latest --}}

<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            <!-- profile banner area start -->
            <div class="profile-banner-large bg-img" data-bg="user/assets/images/banner/profile-banner.jpg">
            </div>
            <!-- profile banner area end -->

            <!-- profile menu area start -->
            <div class="profile-menu-area secondary-navigation-style bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="#">
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
            <!-- profile menu area end -->

            <!-- sendary menu start -->
            <div class="menu-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                                <div class="page-title-inner">
                                    <h4 class="page-title p-4">Jumlah Laporan ({{ $report->count() }})</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sendary menu end -->

            <!-- photo section start -->
            <div class="friends-section mt-20">
                <div class="container">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table w-100">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Postingan</th>
                                        <th scope="col">Diposting Oleh</th>
                                        <th scope="col">Direport Oleh</th>
                                        <th scope="col">Organisasi</th>
                                        <th scope="col">Alasan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($report as $item)
                                        <tr>
                                            {{-- <th scope="row">{{ $item->id_reports }}</th> --}}
                                            <td>{{ $item->utas->judul }}</td>
                                            <td>{{ $item->utas->user->name }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->utas->group->nama }}</td>
                                            <td>{{ $item->alasan }}</td>
                                            <td>
                                                {{-- <button type="danger"></button> --}}
                                                {{-- <button type="button" class="submit-btn btn-sm">Hapus Post</button> --}}
                                                {{-- <button type="button">BAN</button> --}}

                                                <button class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#ModalComment{{ $item->id_utas }}">
                                                    View Post
                                                </button>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#ModalDeleteReport{{ $item->id_reports }}"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>


                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- photo section end -->
        </div>

    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->

    {{-- Modal Delete Report --}}
    @foreach ($report as $itemPost1)
        <!-- Modal Comment-->
        <div>
            <div class="modal fade" id="ModalDeleteReport{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalDeleteReport" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <h6>Peringatan</h6>
                                </div>


                                <div class="post-content">
                                    <h6 style="margin-bottom: 10px">Apakah Anda Yakin Menghapus Report Ini ?</h5>

                                </div>
                                <div class="modal-footer" style="margin-bottom: -20px">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('deleteReport', $itemPost1->id_reports) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="post-share-btn">Hapus</button>
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
    {{-- Modal Delete Report --}}

    <x-modalpost :post="$allutas" />


    <!-- JS
============================================ -->

    @include('user.views.include.modjs')

</body>

</html>
