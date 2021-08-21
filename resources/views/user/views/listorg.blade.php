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
                                <form action="" method="post"></form>
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
                                                                <img src={{ asset('uploads/logo/' . $item->logo_url) }}
                                                                    alt="profile picture">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="card widget-item">

                                                        <h4 class="widget-title author">
                                                            <a href="organisasi/{{ $item->id_groups }}">
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
                                                        @if ($userGroup->contains($item->id_groups))
                                                            <a href="organisasi/{{ $item->id_groups }}"
                                                                class="btn mt-3">Joined</a>
                                                        @else
                                                            <form action="{{ route('join', $item->id_groups) }}"
                                                                method="POST" class="text-center">
                                                                @csrf
                                                                <button type="submit" class="btn mt-3">
                                                                    Gabung </button>
                                                            </form>
                                                        @endif

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
        ===
        ===
        =
        toggle between hiding and showing the dropdown content * / >>> >>> >
        a9b5ac40584487b340433b8b4d5ba93bb6850ae8

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
