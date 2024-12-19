<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Rekomendasi Laptop</title>
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
            <li class="nav-item">
                <a href="{{ url('/index') }}">Konsultasi</a>
            </li>
            <li class="nav-active">
                <a>Daftar Laptop</a>
            </li>
        </ul>
    </navbar>

    <h1>Daftar Laptop Dalam Rekomendasi</h1>
    <table class="laptoplist">
        <thead>
            <tr>
                <th>Nama Laptop</th>
                <th>Kategori</th>
                <th>Budget Minimum</th>
                <th>Budget Maksimum</th>
                <th>Spesifikasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->name }}</td>
                    <td>{{ $laptop->category }}</td>
                    <td>{{ $laptop->min_budget }}</td>
                    <td>{{ $laptop->max_budget }}</td>
                    <td>{{ $laptop->specification }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>
        <a class="bodylink" href="{{ url('/') }}">Kembali ke Halaman Utama</a>
    </p>
</body>
</html>