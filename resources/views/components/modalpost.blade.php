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
                                    <a
                                        href="{{ route('profileID', $itemPost1->user->email) }}">{{ $itemPost1->user->name }}</a>
                                </h6>
                                <span class="post-time">

                                    {{ $itemPost1->created_at->diffForHumans() }}

                                </span>
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

                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="{{ route('profile') }}">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ Storage::url(Auth::user()->profil_image_url) }}" alt="ppUser">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box" action="{{ route('replyPost', $itemPost1->id_utas) }}"
                                    method="POST">
                                    @csrf
                                    <textarea name="konten" class="share-text-field" aria-disabled="true"
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
    {{-- Modal Comments End --}}
@endforeach
{{-- Modal Post&Reply --}}
