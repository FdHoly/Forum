<!DOCTYPE html>
<html lang="en">
@include('user.views.include.head')

<link rel="stylesheet" type="text/css" href= {{url("login/css/fontawesome-all.min.css")}}>
<link rel="stylesheet" type="text/css" href={{url("login/css/iofrm-style.css")}}>
<link rel="stylesheet" type="text/css" href={{url("login/css/iofrm-theme10.css")}}>
<link rel="stylesheet" type="text/css" href={{asset("user/css/loginpage.css")}}>

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Selamat Datang</h3>
                        <p>Ini adalah page pendaftaran</p>
                        <div class="page-links">
                            <a href={{ route('signin') }}>Login</a><a href="" class="active">Register</a>
                        </div>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="select-box">
                                <div class="options-container">
                                    @foreach ($dataUniv as $item)
                                        <div class="option">
                                            <input type="radio" class="radio" id={{ $item->id_univ }}
                                                name="category" />
                                            <label for={{ $item->id_univ }}>{{ $item->nama }}</label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="selected">
                                    Pilih Universitas
                                </div>

                                <div class="search-box">
                                    <input class="form-control" type="text" placeholder="Cari Universitas mu" />
                                </div>
                            </div>
                            <div style="margin-bottom: 0px">
                                <p style="text-align: left; margin-bottom: 10px" accept=".jpg,.jpeg,.png,.gif">Unggah
                                    Foto Profilmu</p>
                                <input id="files " type="file" name="file" required>
                            </div>
                            <input class="form-control" type="text" value="1" name="role" placeholder="Password" hidden required>


                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.views.include.modjs')
    <script src={{ url('login/js/main.js') }}></script>
</body>

</html>
