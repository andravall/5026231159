@extends('template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Daftar Nilai Kuliah</h3>
        <a href="/eas/tambah" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
       @foreach ($nilai as $n)
            @php
                if ($n->nilaiangka <= 40) {
                    $huruf = 'D';
                } elseif ($n->nilaiangka <= 60) {
                    $huruf = 'C';
                } elseif ($n->nilaiangka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }

                $bobot = $n->nilaiangka * $n-> sks;
            @endphp

            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomorindukmahasiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
        @endforeach
    </table>

    {{ $nilai->links() }}
@endsection
