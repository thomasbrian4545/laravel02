<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        {{-- Menampilkan data --}}
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai; ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now()) }}
        </h1>
        <br>
        {{-- Kondisi IF ELSE --}}
        @if ($nilai > 0 and $nilai < 50)
            <div class="alert alert-danger d-inline-block">
                Maaf, Anda tidak lulus.
            </div>
        @elseif ($nilai >= 50 and $nilai <= 100)
            <div class="alert alert-success d-inline-block">
                Selamat, Anda lulus.
            </div>
        @else
            <div class="alert alert-dark d-inline-block">
                Nilai tidak valid.
            </div>
        @endif
        <br>
        {{-- Kondisi SWITCH --}}
        @switch($nilai)
            @case(0)
                <div class="alert alert-danger d-inline-block">
                    Tidak ikut ujian.
                </div>
            @break

            @case(75)
                <div class="alert alert-warning d-inline-block">
                    Lumayan.
                </div>
            @break

            @case(100)
                <div class="alert alert-warning d-inline-block">
                    Bagus.
                </div>
            @break

            @default
                <div class="alert alert-warning d-inline-block">
                    Nilai tidak valid.
                </div>
        @endswitch
        <br>
        {{-- Perulangan FOR --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @for ($i = 0; $i < 5; $i++)
                <div class="alert alert-info d-inline-block">
                    {{ $i }}
                </div>
            @endfor
        </div>
        <br>
        {{-- Perulangan WHILE --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            <?php $i = 0; ?>
            @while ($i < 5)
                <div class="alert alert-info d-inline-block">
                    {{ $i }}
                </div>
                <?php $i++; ?>
            @endwhile
        </div>
        <br>
        {{-- Perulangan Array FOREACH dan Kondisi IF ELSE --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @if (count($buah) > 0)
                @foreach ($buah as $val)
                    @if ($val == 'Mangga')
                        <div class="alert alert-danger d-inline-block">
                            {{ $val }}
                        </div>
                    @else
                        <div class="alert alert-success d-inline-block">
                            {{ $val }}
                        </div>
                    @endif
                @endforeach
            @else
                <div class="alert alert-danger d-inline-block">
                    Tidak ada data.
                </div>
            @endif
        </div>
    </div>
</body>

</html>
