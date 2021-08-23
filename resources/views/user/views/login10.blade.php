<!DOCTYPE html>
<html lang="en">

@include('user.views.include.head')


<link rel="stylesheet" type="text/css" href={{ asset('loginx/css/fontawesome-all.min.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('loginx/css/iofrm-style.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('loginx/css/iofrm-theme10.css') }}>
<link rel="stylesheet" type="text/css" href={{ asset('user/css/loginpage.css') }}>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content" style="background: #343434">
                    <div class="form-items">
                        <img class="w-100" src="{{ url('user/assets/images/logo/forumio8w.png') }}" alt="">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="page-links">
                            <a href="" class="active">Login</a><a href={{ route('register') }}>Register</a>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
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
