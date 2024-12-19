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
            <li class="nav-active">
                <a>Konsultasi</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('list') }}">Daftar Laptop</a>
            </li>
        </ul>
    </navbar>

    <h1>Hasil Rekomendasi Laptop untuk {{ $name }}</h1>
    @if($laptops->isEmpty())
        <p>Tidak ada laptop yang sesuai dengan kriteria Anda.</p>
    @else
        <table class="recommending">
            <thead>
                <tr>
                    <th>Nama Laptop</th>
                    <th>Spesifikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laptops->unique('name') as $laptop)
                    <tr>
                        <td class="recommending-name">{{ $laptop->name }}</td>
                        <td class="recommending-spec">{{ $laptop->specification }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <br>
    <a class="bodylink" href="{{ url('/') }}">Kembali</a>
</body>
</html>
