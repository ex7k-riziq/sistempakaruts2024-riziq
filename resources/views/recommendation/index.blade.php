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
            <li class="nav-item">
                <a href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-active">
                <a>Konsultasi</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('list') }}">Daftar Laptop</a>
            </li>
        </ul>
    </navbar>

    <form class="teststart" method="POST" action="{{ route('input.name') }}">
        @csrf
        <label>Masukkan nama Anda</label><br>
        <input type="text" id="name" name="name" required><br>

        <button type="submit">Mulai</button>
    </form>
</body>
</html>
