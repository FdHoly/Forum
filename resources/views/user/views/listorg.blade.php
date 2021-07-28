<!doctype html>
<html class="no-js" lang="en">


@include('user.views.include.head')

<body>

    <!-- header area start -->
    <header>
        @include('user.views.include.navbar')

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
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                            checked>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Disekitar Anda
                                        </label>
                                    </div>
                                    @foreach ($data as $items)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $items->universitas->nama }}
                                            </label>
                                        </div>
                                    @endforeach
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

                                        @foreach ($data as $item)
                                            <div class="col-lg-4 mb-3 mt-3">
                                                <div>
                                                    <!-- widget single item start -->
                                                    <div class="organisasi__foto">
                                                        <figure class="profile-picture">
                                                            <a href="#">
                                                                <img src="uploads/logo/{{$item->logo_url}}"
                                                                    alt="profile picture">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="card widget-item">

                                                        <h4 class="widget-title author">
                                                            <a href="organisasi/kbmti">
                                                                {{ $item->nama }}
                                                                <br>
                                                                {{-- ( Keluarga Besar Mahasiswa Teknologi Informasi ) --}}
                                                            </a>
                                                        </h4>

                                                        {{-- <h4 >Keluarga Besar Mahasiswa Teknologi Informasi</h4> --}}
                                                        <div class="widget-body">
                                                            <div class="about-author">
                                                                <p>{{ $item['deskripsi'] }}</p>
                                                                <ul class="author-into-list">
                                                                    <li><a href="#"><i
                                                                                class="bi bi-home"></i>{{ $item->universitas->nama }}</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <button class="btn mt-3"> Gabung </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                                            <img src="user/assets/images/profile/profile-small-1.jpg"
                                                alt="profile picture">
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
                                        <a href="user/assets/images/post/post-large-1.jpg">
                                            <img src="user/assets/images/post/post-1.jpg" alt="post image">
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
                                                <img src="user/assets/images/profile/profile-small-3.jpg"
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
                                                <img src="user/assets/images/profile/profile-small-3.jpg"
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
                                            <img src="user/assets/images/profile/profile-small-37.jpg"
                                                alt="profile picture">
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
                                            <img src="user/assets/images/profile/profile-small-3.jpg"
                                                alt="profile picture">
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
                                            <img src="user/assets/images/profile/profile-small-1.jpg"
                                                alt="profile picture">
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
                                    <img src="user/assets/images/post/post-1.jpg" alt="post image">
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


    <!-- JS
============================================ -->

    @include('user.views.include.modjs')

    <script>
        /* When the user clicks on the button,
<<<<<<< HEAD
                                                                                                                                                                                                        toggle between hiding and showing the dropdown content */
=======
                                                                                                                                                                                                            toggle between hiding and showing the dropdown content */
>>>>>>> a9b5ac40584487b340433b8b4d5ba93bb6850ae8
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
