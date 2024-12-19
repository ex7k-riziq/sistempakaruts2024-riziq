<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekomendasi Laptop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <navbar>
        <ul class="nav-list">
            <li class="nav-item">
                <h1>Sistem Pakar Rekomendasi Laptop</h1>
            </li>
            <li class="nav-active">
                <a>Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/index') }}">Konsultasi</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/list') }}">Daftar Laptop</a>
            </li>
        </ul>
    </navbar>
    <p>Ini adalah sistem pakar yang akan merekomendasikan laptop di kisaran harga antara 6 juta hingga 16 juta.</p>
    <p>Untuk mulai konsultasi, <a class="bodylink" href="{{ url('/index') }}">klik disini</a> atau pilih menu konsultasi di kanan atas.</p>
</body>
</html>
