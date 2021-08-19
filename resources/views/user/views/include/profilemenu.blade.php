<div class="col-lg-6 col-md-6 offset-lg-1">
    <div class="profile-menu-wrapper">
        <div class="main-menu-inner header-top-navigation">
            <nav>
                <ul class="main-menu">
                    <li class="{{ Route::currentRouteName() == 'profile' ? 'active' : '' }}"><a
                            href="{{ route('profile') }}">Post</a></li>
                    <li class="{{ Route::currentRouteName() == 'organisasiku' ? 'active' : '' }}"><a
                            href="{{ route('organisasiku') }}">Organisasi</a></li>
                    <li class="{{ Route::currentRouteName() == 'pengumuman' ? 'active' : '' }}"><a
                            href="{{ route('pengumuman') }}">Pengumuman</a></li>
                    @foreach (Auth::user()->group as $group)
                        @if ($group->pivot->role > 1)
                            <li class="{{ Route::currentRouteName() == 'laporan' ? 'active' : '' }}"><a
                                    href="{{ route('laporan') }}">Laporan</a></li>
                        @break
                    @endif
                    @endforeach
                    {{-- @endif --}}

                </ul>
            </nav>
        </div>
    </div>
</div>
