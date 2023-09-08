<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Gallery</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pegawai') }}">Data Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('direksi') }}">Data Direksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('gallery') }}">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('/img/img-01.jpg') }}" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/img-02.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/img-03.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi | Copyright {{ date('Y') }} Belajarlaravel
        </div>
    </footer>
</body>

</html>
