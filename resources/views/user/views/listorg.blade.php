<!doctype html>
<html class="no-js" lang="en">


@include('include.head')

<body>

    <!-- header area start -->
    <header>
        @include('include.navbar')

    </header>
    <!-- header area end -->
    <!-- header area start -->
    <!-- header area end -->

    <main>

        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Filter</h4>
                                <div class="widget-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Seluruh Organisasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Disekitar Anda
                                        </label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Universtias Brawijaya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Universtias Indonesia
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Universtias Sebelas Maret
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="card">
                            <div class="row">
                                <div>


                                    <h4 class="widget-title ml-3">Menampilkan Organisasi Disekitar Anda
                                    </h4>

                                    {{-- <h4 class="widget-title ml-3">Menampilkan Pencarian
                                        <span class="text-primary"> "KBMTI" </span>
                                    </h4> --}}
                                </div>

                                <div class="col-12">
                                    <div class="row mt--20">
                                        {{-- @foreach ($collection as $item) --}}
                                        @for ($i = 0; $i < 9; $i++)
                                            <div class="col-lg-4 mb-3 mt-3">
                                                <div>
                                                    <!-- widget single item start -->
                                                    <div class="organisasi__foto">
                                                        <figure class="profile-picture">
                                                            <a href="#">
                                                                <img src="https://media-exp3.licdn.com/dms/image/C510BAQHzyDspmy9zYQ/company-logo_200_200/0/1579617593341?e=2159024400&v=beta&t=JxR_8Y7zhu4MQh5c2iUqn_atI61woD5dCetYYgataQg"
                                                                    alt="profile picture">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="card widget-item">

                                                        <h4 class="widget-title author">
                                                            <a href="organisasi/kbmti">
                                                            KBMTI
                                                            <br>
                                                            ( Keluarga Besar Mahasiswa Teknologi Informasi )
                                                            </a>
                                                        </h4>

                                                        {{-- <h4 >Keluarga Besar Mahasiswa Teknologi Informasi</h4> --}}
                                                        <div class="widget-body">
                                                            <div class="about-author">
                                                                <p>Akun Resmi Organisasi Himpunan Teknologi Informasi
                                                                    Universitas Brawijaya</p>
                                                                <ul class="author-into-list">
                                                                    <li><a href="#"><i
                                                                                class="bi bi-home"></i>Universitas
                                                                            Brawijaya</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <button class="btn mt-3"> Gabung </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                        {{-- @endforeach --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
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

        <!-- Modal Comment-->
        <div class="modal fade" id="ModalComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="{{ route('profile') }}">Merry Watson</a>
                                        <img src="https://image.flaticon.com/icons/png/512/271/271228.png" class="icon"
                                            alt="">
                                        <a href="organisasi/kbmti">KBMTI</a>
                                    </h6>
                                    <span class="post-time">20 min ago</span>
                                </div>
                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>edit post</button></li>
                                            <li><button>hapus post</button></li>
                                            <li>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#exampleModalLong">
                                                    Laporkan
                                                </button>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy.
                                </p>
                                <div class="post-thumb-gallery">
                                    <figure class="post-thumb img-popup">
                                        <a href="assets/images/post/post-large-1.jpg">
                                            <img src="assets/images/post/post-1.jpg" alt="post image">
                                        </a>
                                    </figure>
                                </div>

                            </div>
                            <br>
                            <h6>Komentar</h6>
                            <br>
                            <div class="card">

                                <!-- post title start -->
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-3.jpg"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">

                                        <!-- profile picture end -->
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <span class="post-time">15 min ago</span>
                                    </div>


                                </div>
                                <!-- post title start -->
                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for
                                    </p>

                                </div>
                                <br>
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="assets/images/profile/profile-small-3.jpg"
                                                    alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">

                                        <!-- profile picture end -->
                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                        <span class="post-time">15 min ago</span>
                                    </div>


                                </div>
                                <!-- post title start -->
                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their
                                        default model text, and a search for
                                    </p>

                                </div>
                            </div>

                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-37.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true"
                                            placeholder="Say Something" data-toggle="modal" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        {{-- Modal Pengumuman --}}
        <div class="modal fade" id="ModalPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Judul Pengumuman</a></h6>
                                    <span class="post-time">15 min ago</span>
                                </div>

                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <p class="post-desc pb-0">
                                    Ini nanti berisi mengenai informasi apa yang terdapat dari sebuah pengumuman yang
                                    ada di home
                                </p>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        {{-- Modal Pengumuman --}}

        {{-- Modal Edit Post --}}
        <div class="modal fade" id="ModalEditPost" tabindex="-1" role="dialog" aria-labelledby="ModalEditPost"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="{{ route('profile') }}">Merry Watson</a>
                                    </h6>
                                    <span class="post-time">20 min ago</span>
                                </div>
                            </div>

                            <!-- post title start -->
                            <div class="post-content">
                                <textarea name="share" class="share-field-big custom-scroll" aria-disabled="true"
                                    data-toggle="modal"
                                    id="email">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</textarea>
                                <div class="post-thumb-gallery">
                                    <img src="assets/images/post/post-1.jpg" alt="post image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                <button type="button" class="post-share-btn">Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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

    </main>


    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->
    {{-- Footer area deleted --}}

    <!-- footer area start -->
    {{-- <footer class="d-block d-lg-none">
        <div class="footer-area reveal-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-footer-inner d-flex">
                            <div class="mobile-frnd-search">
                                <button class="search-toggle-btn"><i class="flaticon-search"></i></button>
                            </div>
                            <div class="mob-frnd-search-inner">
                                <form class="mob-frnd-search-box d-flex">
                                    <input type="text" placeholder="Search Your Friends" class="mob-frnd-search-field">
                                </form>
                            </div>
                            <div class="card card-small mb-0 active-profile-mob-wrapper">
                                <div class="active-profiles-mob-wrapper slick-row-10">
                                    <div class="active-profile-mobile">
                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-8.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->

                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer> --}}
    <!-- footer area end -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <script>
        /* When the user clicks on the button,
                                                                                                                                                                                    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }


        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })


        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

</body>

</html>
