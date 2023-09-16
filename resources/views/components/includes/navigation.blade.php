<nav class="navbar navbar-expand-sm navbar-dark @if (Route::is('gallery'))
bg-danger @else bg-dark
@endif">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('menuPegawai')" href="{{ route('pegawai') }}">Data Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuDireksi')" href="{{ route('direksi') }}">Data Direksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuGallery')" href="{{ route('gallery') }}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuInformasi')" href="{{ route('info', ['fakultas' => 'FMIPA', 'jurusan' => 'Fisika']) }}">Info</a>
            </li>
        </ul>
    </div>
</nav>
