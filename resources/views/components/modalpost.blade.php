{{-- Modal Post&Reply --}}
@foreach ($post as $itemPost1)
    <!-- Modal Comment-->
    <div class="modal fade" id="ModalComment{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="{{ route('profile') }}">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ Storage::url($itemPost1->user->profil_image_url) }}"
                                            alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author">
                                    <a href="{{ route('profileID', $itemPost1->user->email) }}">{{ $itemPost1->user->name }}
                                        ▶
                                        <a
                                            href="{{ route('detailOrg', $itemPost1->group->id_groups) }}">{{ $itemPost1->group->nama }}</a></a>
                                </h6>
                                <span class="post-time">

                                    {{ $itemPost1->created_at->diffForHumans() }}

                                </span>
                            </div>
                            <div class="post-settings-bar">
                                {{-- <button class="btn btn-danger" type="" data-toggle="modal"
                                    data-target="#{{ $itemPost1->id_utas }}">
                                    </a>
                                </button> --}}
                                <button type="button" data-toggle="modal"
                                    data-target="#ModalDeletePost{{ $itemPost1->id_utas }}"
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>


                        <!-- post title start -->
                        <div class="post-content">
                            <h5 style="margin-bottom: 10px">{{ $itemPost1->judul }}</h5>
                            <p class="post-desc">
                                {{ $itemPost1->konten }}
                            </p>

                            @if ($itemPost1->image_url !== null)
                                <div class="post-thumb-gallery">
                                    <figure class="post-thumb img-popup">
                                        <a href={{ Storage::url($itemPost1->image_url) }}>
                                            <img src={{ Storage::url($itemPost1->image_url) }} alt="post image">
                                        </a>
                                    </figure>
                                </div>
                            @endif



                        </div>
                        <br>
                        <h6>Komentar</h6>
                        <br>



                        <div class="card">
                            @forelse ($itemPost1->replyutas as $komen)
                                <div class="post-title d-flex align-items-center">
                                    <div class="profile-thumb">
                                        <a
                                            href="{{ Auth::user()->id_users === $komen->user->id_users ? route('profile') : route('profileID', $komen->user->email) }}">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{ Storage::url($komen->user->profil_image_url) }}"
                                                    alt="ppUser">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <!-- profile picture end -->
                                        <h6 class="author">
                                            <a
                                                href="{{ Auth::user()->id_users === $komen->user->id_users ? route('profile') : route('profileID', $komen->user->email) }}">{{ $komen->user->name }}</a>
                                        </h6>
                                        <span class="post-time">{{ $komen->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <!-- post title start -->
                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        {{ $komen->konten }}
                                    </p>

                                </div>
                                <br>
                            @empty
                                <p class="post-desc pb-0">
                                    Tidak ada komentar
                                </p>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Comments End --}}
@endforeach
{{-- Modal Post&Reply --}}


{{-- Modal Delete Post --}}
@foreach ($post as $itemPost1)
    <!-- Modal Comment-->
    <div>
        <div class="modal fade" id="ModalDeletePost{{ $itemPost1->id_utas }}" tabindex="-1" role="dialog"
            aria-labelledby="ModalDeletePost" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="card">
                            <div class="post-title d-flex align-items-center">
                                <h6>Peringatan</h6>
                            </div>
                            <div class="post-content">
                                <h6 style="margin-bottom: 10px">Apakah Anda Yakin Menghapus Postingan Ini ?</h5>

                            </div>
                            <div class="modal-footer" style="margin-bottom: -20px">
                                <button type="button" class="post-share-btn" data-dismiss="modal">Batal</button>
                                <form action="{{ route('deletePost', $itemPost1->id_utas) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="post-share-btn">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Comments End --}}
        </div>
    </div>
@endforeach
{{-- Modal Delete Post --}}
