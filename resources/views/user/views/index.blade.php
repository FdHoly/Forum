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
                                            @if (Auth::user()->background_image_url !== null)
                                                <img src="{{ Auth::user()->background_image_url }}" alt="bgUser">
                                            @else
                                                <img src="user/assets/images/banner/banner-small.jpg" alt="bgUser">
                                            @endif
                                        </a>
                                        <a href="{{ route('profile') }}" class="profile-thumb-2">
                                            <img src="{{ Storage::url(Auth::user()->profil_image_url) }}"
                                                alt="ppUser">
                                        </a>
                                    </figure>
                                    <div class="profile-desc text-center">
                                        <h6 class="author"><a
                                                href="{{ route('profile') }}">{{ Auth::user()->name }}</a></h6>
                                        <p> {{ Auth::user()->biodata !== null ? Auth::user()->biodata : 'Tidak Ada Bio' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Saran Grup</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        @foreach ($DataRandom as $itemGroup)
                                            <li class="unorder-list">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="{{ Storage::url('logo/' . $itemGroup->image_url) }}"
                                                                alt="ppGroup">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->
                                                <div class="unorder-list-info">
                                                    <h3 class="list-title"><a
                                                            href={{ route('detailOrg', ['id' => $itemGroup->id_groups]) }}>{{ $itemGroup->nama }}</a>
                                                    </h3>
                                                    <p class="list-subtitle">{{ $itemGroup->universitas->nama }}</p>
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
                                            <img src={{ Storage::url(Auth::user()->profil_image_url) }}
                                                alt="ppUser">
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
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                            <div class="modal-header">
                                                <h5 class="modal-title">Katakan Sesuatu</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {{-- Formulir Share --}}
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body custom-scroll">
                                                    <input name="judul" type="text" required
                                                        class="block w-100 p-2 mb-2 my-judul" placeholder="Judul">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="organisasi"></label>
                                                            <select name="id_groups" id="organisasi"
                                                                class="form-control block w-100 p-2 mb-2" required>
                                                                <option value="">Pilih Organisasi</option>
                                                                @forelse ($group as $item)
                                                                    <option value="{{ $item->id_groups }}">
                                                                        {{ $item->nama }}
                                                                    </option>
                                                                @empty
                                                                    
                                                                @endforelse

                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <select name="status" id="inputState"
                                                                class="form-control block w-100 p-2 mb-2" required>
                                                                <option selected value="1">Public</option>
                                                                <option value="0">Private</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <textarea name="konten" class="share-field-big custom-scroll"
                                                        placeholder="Katakan Sesuatu" required></textarea>

                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Unggah Foto</label>
                                                        <input name="image_url" type="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                    </div>
                                                </div>
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

                            @if (app('request')->input('filter') ==='semua')
                            <h6><span>Menampilkan Semua Postingan</span></h6>
                            @elseif (app('request')->input('filter') ==='organisasi')
                            <h6><span>Menampilkan Postingan Organisasi Yang Anda Ikuti</span></h6>
                            @else
                            <h6><span>Menampilkan Postingan di Universitas Anda</span></h6>
                            @endif
                            {{-- <button onclick="myFunction()" class="dropbtn">Dropdown</button> --}}

                            <img src="https://image.flaticon.com/icons/png/512/3126/3126539.png" onclick="myFunction()"
                                class="filter__icon">
                            <div id="myDropdown" class="dropdown-content">
                                <a href="{{route('index', ['filter' => "semua"] )}}">Semua Postingan</a>
                                <a href="{{route('index', ['filter' => "organisasi"] )}}">Organisasi Anda</a>
                                <a href="{{route('index')}}">Universitas</a>
                            </div>
                        </div>
                        <!-- post status start -->
                        <!-- post title start -->
                        <x-post :post="$allutas" />
                        {{-- @include('user.views.include.post') --}}

                    </div>
                    <x-events :pengumuman="$pengumuman" :acara="$acara" :rapat="$rapat" />
                    {{-- @include('user.views.include.event') --}}
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
