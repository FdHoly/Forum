<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="{{ asset('user/assets/images/logo/logo.png') }}" type="image/x-icon">
    <title> Forumio : Admin</title>

    <link rel="stylesheet" href="../admin/assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../admin/assets/css/main.css" type="text/css">
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../admin/assets/images/brand/icon_black.svg" width="48" height="48"
                    alt="ArrOw">
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    @include('admin.views.include.upbar')

    <div class="main_content" id="main-content">

        @include('admin.views.include.sidebar')



        <div class="page">

            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade" id="Bootstrap" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Basic Table <small>Basic example without any additional modification
                                                classes</small> </h2>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Striped Rows <small>Use <code>.table-striped</code> to add zebra-striping to
                                                any table row within the <code>&lt;tbody&gt;</code></small> </h2>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Bordered Table <small>Add <code>.table-bordered</code> for borders on all
                                                sides of the table and cells.</small> </h2>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Hover Rows <small>Add <code>.table-hover</code> to enable a hover state on
                                                table rows within a <code>&lt;tbody&gt;</code>.</small> </h2>
                                    </div>
                                    <div class="body table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>FIRST NAME</th>
                                                    <th>LAST NAME</th>
                                                    <th>USERNAME</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Larry</td>
                                                    <td>Jellybean</td>
                                                    <td>@lajelly</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Larry</td>
                                                    <td>Kikat</td>
                                                    <td>@lakitkat</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="More-table" role="tabpanel">
                        <div class="row clearfix">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>Postingan</h2>
                                    </div>
                                    <div class="body">
                                        <div class="table-responsive">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-10">
                                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                                        <label>Show <select name="DataTables_Table_0_length"
                                                                aria-controls="DataTables_Table_0"
                                                                class="form-control form-control-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> entries</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-2">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                        <form action="{{ route('admPost') }}" method="get"
                                                            id="formSearch">
                                                            <label>Search : <input type="search" name="search"
                                                                    id="search" class="form-control form-control-sm"
                                                                    placeholder="Cari Postingan"
                                                                    aria-controls="DataTables_Table_0"></label>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <table class="table va_center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Post ID</th>
                                                        <th>Judul Post</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Pemilik Post</th>
                                                        <th>Organisasi</th>
                                                        <th>Jumlah Report</th>
                                                        <th>Status Post</th>
                                                        <th>Action</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- <x-modalpost :post="$data" /> --}}
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $item->id_utas }}</td>
                                                            <td>{{ $item->judul }}</td>
                                                            <td>{{ $time = date('j F Y G:i:s', strtotime($item->created_at)) }}
                                                            <td>{{ $item->user->name }}</td>
                                                            <td>{{ $item->group->nama }}</td>
                                                            <td>{{ $item->report->count() }}
                                                                <a href="{{ route('admReport', ['searchIDpost' => $item->id_utas]) }}"
                                                                    class="btn btn-success btn-sm">View Report</a>
                                                            </td>
                                                            <td><label
                                                                    class="badge badge-primary text-uppercase">{{ $item->status == '0' ? 'Public' : 'Private' }}</label>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-success btn-sm"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalComment{{ $item->id_utas }}">
                                                                    View Post
                                                                </button>
                                                                <button type="submit" data-toggle="modal"
                                                                    data-target="#ModalDelete{{ $item->id_utas }}"
                                                                    class="btn btn-danger btn-sm"><i
                                                                        class="fa fa-trash"></i></button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Delete Utas --}}
    @foreach ($data as $itemPost1)
        <div>
            <div class="modal fade" id="ModalDelete{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalDelete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <h5>Peringatan</h5>
                                </div>
                                <div class="post-content">
                                    <h6 style="margin-bottom: 10px">Apakah Anda Yakin Menghapus Utas Ini ?</h5>
                                </div>
                                <div class="modal-footer" style="margin-bottom: -20px">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('admdeletePost', $itemPost1->id_utas) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modal Delete Utas --}}
    @foreach ($data as $itemPost1)
        <div>
            <div class="modal fade" id="ModalComment{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalDelete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <!-- profile picture end -->
                                    <div class="avatar w30">
                                        <a href="{{ route('profile') }}">
                                            <img src="{{ Storage::url($itemPost1->user->profil_image_url) }}"
                                                alt="profile picture">
                                        </a>
                                    </div>
                                    <!-- profile picture end -->

                                    <div class="posted-author">
                                        <h6 class="author">
                                            <a
                                                href="{{ route('profileID', $itemPost1->user->email) }}">{{ $itemPost1->user->name }}</a>
                                            ???
                                            <a
                                                href="{{ route('detailOrg', $itemPost1->group->id_groups) }}">{{ $itemPost1->group->nama }}</a>
                                        </h6>
                                        <span class="post-time">

                                            {{ $itemPost1->created_at->diffForHumans() }}

                                        </span>
                                    </div>

                                </div>


                                <!-- post title start -->
                                <div class="post-content">
                                    <h5 style="margin-bottom: 10px">{{ $itemPost1->judul }}</h5>
                                    <p class="post-desc">
                                        {{ $itemPost1->konten }}
                                    </p>

                                    @if ($itemPost1->image_url !== null)
                                        <div class="post-thumb-gallery">
                                            <figure class="post-thumb img-popup">
                                                <a href={{ Storage::url($itemPost1->image_url) }}>
                                                    <img src={{ Storage::url($itemPost1->image_url) }}
                                                        alt="post image">
                                                </a>
                                            </figure>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modal View Post --}}
    {{-- Modal Post&Reply --}}
    {{-- @foreach ($data as $itemPost1)
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
                                        <a href="{{ route('profileID', $itemPost1->user->email) }}">{{ $itemPost1->user->name }}
                                            ???
                                            <a
                                                href="{{ route('detailOrg', $itemPost1->group->id_groups) }}">{{ $itemPost1->group->nama }}</a></a>
                                    </h6>
                                    <span class="post-time">

                                        {{ $itemPost1->created_at->diffForHumans() }}

                                    </span>
                                </div>

                            </div>


                            <!-- post title start -->
                            <div class="post-content">
                                <h5 style="margin-bottom: 10px">{{ $itemPost1->judul }}</h5>
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
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Comments End --}}
    {{-- @endforeach --}} --}}
    {{-- Modal Post&Reply --}}
    {{-- Modal View Post --}}

    <!-- Core -->
    <script src="../admin/assets/bundles/libscripts.bundle.js"></script>
    <script src="../admin/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../admin/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
    <script>
        document.getElementById('search')
            .addEventListener('keyup', function(event) {
                if (event.code === 'Enter') {
                    event.preventDefault();
                    document.getElementById('formSearch').submit();
                }
            });
    </script>
    <!-- Theme JS -->
    <script src="../admin/assets/js/theme.js"></script>
    <script>
        $('.sparkbar-mini').sparkline('html', {
            type: 'bar',
            height: '18px',
            barWidth: 5,
            barSpacing: 2
        });
    </script>
</body>

</html>
