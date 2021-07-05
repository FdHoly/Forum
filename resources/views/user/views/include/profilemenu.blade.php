<div class="col-lg-6 col-md-6 offset-lg-1">
    <div class="profile-menu-wrapper">
        <div class="main-menu-inner header-top-navigation">
            <nav>
                <ul class="main-menu">
                    <li class="{{Route::currentRouteName() == 'profile' ? 'active' : ''}}"><a href="{{ route('profile') }}">Post</a></li>
                    <li class="{{Route::currentRouteName() == 'friends' ? 'active' : ''}}"><a href="{{ route('friends')}}">Organisasi</a></li>
                    <li class="{{Route::currentRouteName() == 'pengumuman' ? 'active' : ''}}"><a href="{{ route('pengumuman')}}">Pengumuman</a></li>
                    <li class="{{Route::currentRouteName() == 'laporan' ? 'active' : ''}}"><a href="{{ route('laporan')}}">Laporan</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>