<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            <a href="{{ url('informasi/Teknik/Informatika') }}">Jurusan Informatika</a> | Sistem Informasi | Copyright {{ date('Y') }} Belajarlaravel
        </div>
    </footer>
</body>

</html>
