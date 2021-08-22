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
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="user/assets/images/logo/forumio8.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Forumio</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
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
