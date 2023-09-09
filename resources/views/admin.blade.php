<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">

                {{-- <div class="alert alert-warning alert-dismissible fade show">
                    100 data mahasiswa perlu di perbaiki
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>

                <div class="alert alert-danger alert-dismissible fade show">
                    Hari ini deadline laporan perjalanan dinas!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div> --}}

                @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    @slot('judul')
                        Peringatan
                    @endslot
                    100 data mahasiswa perlu di perbaiki
                @endcomponent

                @component('layout.alert')
                    @slot('class')
                        danger
                    @endslot
                    @slot('judul')
                        Awas
                    @endslot
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent

                @component('layout.alert', ['class' => 'success', 'judul' => 'Oke'])
                    Bulan depan cuti panjang!
                @endcomponent

            </div>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>
