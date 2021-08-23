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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between">

                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Show <select name="DataTables_Table_0_length"
                                            aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>

                                </div>


                                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                    <form action="{{ route('admUser') }}" method="get" id="formSearch">
                                        <label>Search : <input type="search" name="search" id="search"
                                                class="form-control form-control-sm" placeholder="Cari User"
                                                aria-controls="DataTables_Table_0"></label>
                                    </form>
                                </div>

                            </div>
                            <table class="table table-hover mb-0 c_table">
                                <thead>
                                    <tr>
                                        <th class="w60">ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Total Post</th>
                                        <th>Total Post Report</th>
                                        <th class="text-center">Jumlah Organisasi</th>
                                        <th>Report Page</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <span class="ml-2">{{ $item->id_users }}</span>

                                            </td>
                                            <td>
                                                <img src="{{ Storage::url($item->profil_image_url) }} "
                                                    class="avatar w30" alt="">
                                                <span class="ml-2">{{ $item->name }}</span>
                                            </td>
                                            <td>
                                                <span class="email"><a href="javascript:void(0);"
                                                        title="">{{ $item->email }}</a></span>
                                            </td>
                                            <td>
                                                <span class="phone">User</span>
                                            </td>
                                            <td>
                                                <span class="phone">{{ $item->utas->count() }}</span>
                                            </td>
                                            <td class="text-center"> <span
                                                    class="phone">{{ $item->report->count() }}</span>
                                            <td class="text-center"> <span
                                                    class="phone">{{ $item->UserGroup->count() }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admReport', ['searchIDuser' => $item->id_users]) }}"
                                                    class="btn btn-success btn-sm">View
                                                    Report</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admdeleteUser', $item->id_users) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#ModalDeleteUser{{ $item->id_users }}"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
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

    {{-- Modal Delete User --}}
    @foreach ($data as $itemPost1)
        <!-- Modal Comment-->
        <div>
            <div class="modal fade" id="ModalDeleteUser{{ $itemPost1->id_users }}" tabindex="-1" role="dialog"
                aria-labelledby="ModalDelete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="post-title d-flex align-items-center">
                                    <h5>Peringatan</h5>
                                </div>
                                <div class="post-content">
                                    <h6 style="margin-bottom: 10px">Apakah Anda Yakin Menghapus User Ini ?</h5>
                                </div>
                                <div class="modal-footer" style="margin-bottom: -20px">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="{{ route('admdeleteUser', $itemPost1->id_users) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
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
    {{-- Modal Delete User --}}

    <!-- Core -->
    <script src="../admin/assets/bundles/libscripts.bundle.js"></script>
    <script src="../admin/assets/bundles/vendorscripts.bundle.js"></script>
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
</body>

</html>
