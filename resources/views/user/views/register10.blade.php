<!DOCTYPE html>
<html lang="en">
@include('user.views.include.head')


<link rel="stylesheet" type="text/css" href={{ url('loginx/css/fontawesome-all.min.css') }}>
<link rel="stylesheet" type="text/css" href={{ url('loginx/css/iofrm-style.css') }}>
<link rel="stylesheet" type="text/css" href={{ url('loginx/css/iofrm-theme10.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('user/css/loginpage.css') }}>

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content" style="background: #343434">
                    <div class="form-items">
                        <img class="w-100" src="{{ url('user/assets/images/logo/forumio8w.png') }}" alt="">
                        <x-auth-validation-errors class="mb-4 text-light" :errors="$errors" />
                        <div class="page-links">
                            <a href={{ route('login') }}>Login</a><a href="" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Password"
                                required>
                            <input class="form-control" type="password" name="password_confirmation"
                                placeholder="Password Confirmation" required>
                            <div class="select-box">
                                <div class="options-container">
                                    @foreach ($dataUniv as $item)
                                        <div class="option">
                                            <input id="{{ $item->nama }}" name="id_univ" class="radio"
                                                value="{{ $item->id_univ }}" />
                                            <label for={{ $item->id_univ }}>{{ $item->nama }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="selected" style="background: rgba(255, 255, 255, 0.15);">
                                    Pilih Universitas
                                </div>
                                <div class="search-box">
                                    <input class="form-control" type="text" placeholder="Cari Universitas mu" />
                                </div>
                            </div>
                            <div style="margin-bottom: 0px">
                                <p style="text-align: left; margin-bottom: 10px" accept=".jpg,.jpeg,.png,.gif">
                                    Unggah
                                    Foto Profilmu</p>
                                <input id="files " type="file" name="file" accept=".jpg,.jpeg,.png,.gif" required>
                            </div>
                            <input class="form-control" type="text" value="1" name="role" placeholder="Password"
                                hidden required>


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
    <script>
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>
</body>

</html>
