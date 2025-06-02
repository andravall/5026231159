<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Tugas Pemrograman Web</title>
    <link rel="stylesheet" href="{{ asset('css/cssfrontend.css') }}">
</head>
<body>

    <h1>Kumpulan Tugas Pemrograman Web (D)</h1>
    <h3 style="margin-top: -20px;">MOHAMMAD FERDINAND VALLIANDRA | 5026231159</h3>

    <div class="container">
        <a href="{{ url('/pertemuan3') }}" class="card">
            <img src="{{ asset('image/tugas1.png') }}" alt="HTML DASAR">
            <p>HTML Dasar & CSS</p>
        </a>
        <a href="{{ url('/pertemuan4') }}" class="card">
            <img src="{{ asset('image/tugas3.png') }}" alt="SIDEBAR BOOTSTRAP">
            <p>SIDEBAR Bootstrap</p>
        </a>
        <a href="{{ url('/template1') }}" class="card">
            <img src="{{ asset('image/tugas4.png') }}" alt="Template1">
            <p>16 April 2025</p>
        </a>
        <a href="{{ url('/pertemuan7-js1') }}" class="card">
            <img src="{{ asset('image/tugas5.png') }}" alt="FORM VALIDASI 1">
            <p>Form dan Validasi 1</p>
        </a>
        <a href="{{ url('/pertemuan7-js2') }}" class="card">
            <img src="{{ asset('image/tugas6.png') }}" alt="FORM VALIDASI 2">
            <p>Form dan Validasi 2</p>
        </a>
        <a href="{{ url('/tugaslinktree') }}" class="card">
            <img src="{{ asset('image/tugas7.png') }}" alt="Linktree">
            <p>Linktree</p>
        </a>
        <a href="{{ url('/ets') }}" class="card">
            <img src="{{ asset('image/tugas8.png') }}" alt="ETS">
            <p>ETS</p>
        </a>
        <a href="{{ url('/formulir') }}" class="card">
            <img src="{{ asset('image/tugas8.png') }}" alt="BLOG">
            <p>Formulir</p>
        </a>
        <a href="{{ url('/blog') }}" class="card">
            <img src="{{ asset('image/tugas8.png') }}" alt="BLOG">
            <p>Blog</p>
        </a>
        <a href="{{ url('/pegawai') }}" class="card">
            <img src="{{ asset('image/tugas8.png') }}" alt="CRUD PEGAWAI">
            <p>CRUD Pegawai</p>
        </a>
    </div>

</body>
</html>
