<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Pegawai</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('pegawai') }}">Data Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('direksi') }}">Data Direksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
