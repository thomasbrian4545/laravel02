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
    </div>
</body>

</html>
