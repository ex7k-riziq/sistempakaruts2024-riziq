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

    <h1>Halo, {{ session('name') }}!</h1>
    <form class="teststart" method="POST" action="{{ route('recommendation.process') }}">
        @csrf
        <label>Anda akan menggunakan laptop untuk apa?</label><br>
        <select name="purpose" required>
            <option disabled selected value> Pilih</option>
            <option value="produktivitas">Produktivitas</option>
            <option value="gaming">Gaming</option>
            <option value="kreasi">Kreasi</option>
        </select><br><br>

        <label>Berapa budget Anda?</label><br>
        <select name="budget" required>
            <option disabled selected value> Pilih</option>
            <option value="0-6000000">6 juta dan kebawah</option>
            <option value="7000000-11000000">7 juta sampai 11 juta</option>
            <option value="12000000-16000000">12 juta hingga 16 juta</option>
        </select><br><br>

        <button type="submit">Cari Rekomendasi</button>
    </form>
</body>
</html>