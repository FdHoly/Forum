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
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="" class="active">Login</a><a href={{route('register')}}>Register</a>
                        </div>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget10.html">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.views.include.modjs')
<script src={{url('login/js/main.js')}}></script>
</body>
</html>