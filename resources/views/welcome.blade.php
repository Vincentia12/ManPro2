<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SELAMAT DATANG DI SISTEM INFORMASI MANAJEMEN ASET TANAH</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* style untuk gambar fullscreen */
        #bg {
            position: fixed;
            top: 0;
            left: 0;

            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>

<body>
    {{-- background="{{ asset('template/')}} --}}
    <img src="{{ asset('img/bg.png') }}" id="bg" alt="">

    <div class="card-img-overlay text-center d-flex flex-column h-100">
        <div class="my-auto">
            <!-- <h5 class="card-title">Card title</h5> -->
            <h1 class="text-center mb-5 text-white"><b> SELAMAT DATANG DI <br> SISTEM INFORMASI MANAJEMEN ASET TANAH <br> DI PERUMAHAN D’GARDEN CITY MOJOKERTO</b> </h1>
            {{-- <button type="button" class="btn btn-info "> --}}
            <a class="btn btn-lg btn-primary mt-5" href="{{ route('login') }}"> Masuk</a>
            {{-- </button> --}}
        </div>
    </div>
</body>

</html>
