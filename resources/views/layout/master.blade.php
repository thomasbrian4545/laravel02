<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>@yield('title', 'Sistem Informasi')</title>
</head>

<body>
    <x-includes.navigation />

    {{-- @yield('content') --}}
    @section('content')
    <div class="alert alert-primary text-center">Sistem Informasi</div>
    @show

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            <a href="{{ url('informasi/Teknik/Informatika') }}">Jurusan Informatika</a> | Sistem Informasi | Copyright {{ date('Y') }} Belajarlaravel
        </div>
    </footer>
</body>

</html>
