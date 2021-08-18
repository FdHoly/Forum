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
                            <div class="card card-profile widget-item p-0">
                                <div class="profile-banner">
                                    <figure class="profile-banner-small">
                                        <a href="{{ route('profile') }}">
                                            <img src="user/assets/images/banner/banner-small.jpg" alt="">
                                        </a>
                                        <a href="{{ route('profile') }}" class="profile-thumb-2">
                                            <img src="user/assets/images/profile/profile-midle-1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="profile-desc text-center">
                                        <h6 class="author"><a href="{{ route('profile') }}">Dimbel Lebmid</a></h6>
                                        <p>Any one can join with but Social network us if you want Any one can join with
                                            us if you want</p>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item start -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">group you may like</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        @foreach ($DataRandom as $itemGroup)
                                            <li class="unorder-list">
                                                <!-- profile picture end -->

                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="user/assets/images/profile/profile-small-33.jpg"
                                                                alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="unorder-list-info">
                                                    <h3 class="list-title"><a href="#">{{ $itemGroup->nama }}</a></h3>
                                                    <p class="list-subtitle"><a
                                                            href="#">{{ $itemGroup->universitas->nama }}</a></p>
                                                </div>

                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>


                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                        <div class="card card-small">
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
                                            placeholder="Say Something" data-toggle="modal" data-target="#textbox"
                                            id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {{-- Formulir Share --}}
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body custom-scroll">
                                                    <input name="judul" type="text" class="block w-100 p-2 mb-2 my-judul"
                                                        placeholder="Judul">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select name="id_groups" id="inputState"
                                                                class="form-control block w-100 p-2 mb-2">
                                                                <option selected>Pilih Organisasi</option>
                                                                <option value="4">KBMTI</option>
                                                                <option value="5">KBMPTI</option>
                                                                <option value="6">KBMSI</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="status" id="inputState"
                                                                class="form-control block w-100 p-2 mb-2">
                                                                <option selected value="1">Public</option>
                                                                <option value="0">Private</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <textarea name="konten" class="share-field-big custom-scroll"
                                                        placeholder="Say Something"></textarea>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Unggah Foto</label>
                                                        <input name="image_url" type="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                    </div>
                                                </div>


                                                <input type="hidden" name="id_users" value="1">
                                                <div class="modal-footer">
                                                    <button type="button" class="post-share-btn"
                                                        data-dismiss="modal">cancel</button>
                                                    <button type="submit" class="post-share-btn">Post</button>
                                                </div>
                                            </form>
                                            {{-- Formulir Share --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                        </div>
                        <!-- share box end -->
                        <div class="dropdown">
                            <h6><span>Menampilkan Semua Postingan</span></h6>
                            {{-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> --}}
                            <img src="https://image.flaticon.com/icons/png/512/3126/3126539.png" onclick="myFunction()"
                                class="filter__icon">
                            <div id="myDropdown" class="dropdown-content">
                                <a href="/">Semua</a>
                                <a href="/filter=organisasi">Organisasi</a>
                                <a href="/filter=universitas">Universitas</a>
                            </div>
                        </div>
                        <!-- post status start -->
                        <!-- post title start -->

                        @include('user.views.include.post')

                    </div>

                    @include('user.views.include.event')
                </div>
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

    <!-- Modernizer JS -->

    @include('user.views.include.modjs')

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
