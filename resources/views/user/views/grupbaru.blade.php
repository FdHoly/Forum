<!doctype html>
<html class="no-js" lang="en">

@include('user.views.include.head')


<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')
    </header>
    <!-- header area end -->

    <main>

        <div class="main-wrapper">
            <input class="fileInput-23-d-3" type="file" tabindex="0" multiple="" accept=".jpg,.jpeg,.png,.gif"
                aria-label="Change
                                        Avatar"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
        </div>
        <div class="profile-menu-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">

                            <span aria-hidden="true"></span>
                            <figure class="profile-picture">
                                <label for="image">
                                    <input class="fileInput-23-d-3" type="file" tabindex="0" multiple=""
                                        accept=".jpg,.jpeg,.png,.gif" aria-label="Change
                                        Avatar"
                                        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                    <img src="user/assets/images/profile/profile-1.jpg" alt="profile picture">

                                </label>


                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->

                            <!-- post title start -->
                            <form class="signup-inner--form">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="nama_grup" class="single-field" placeholder="Nama Grup">
                                    </div>
                                    <div class="col-12">
                                        <input type="deskripsi" class="single-field" placeholder="Deskripsi Grup">
                                    </div>
                                    <div class="col-12">
                                        <input type="universitas" class="single-field" placeholder="Universitas">
                                    </div>
                                    <div class="col-10">
                                        <button class="submit-btn">Buat</button>
                                        <button class="submit-btn">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- post status end -->


                        <!-- post status end -->
                    </div>


                </div>

    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->



    <!-- JS
============================================ -->

    @include('user.views.include.modjs')

</body>

</html>
