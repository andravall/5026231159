@extends('template')

@section('content')
    <h3>Data RAM</h3>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('ram.create') }}" class="btn btn-primary">+ Tambah RAM Baru</a>
    <br><br>

    <table class="table table-striped">
        <tr>
            <th>Merk RAM</th>
            <th>Harga RAM</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach($ram as $r)
        <tr>
            <td>{{ $r->merkRAM }}</td>
            <td>{{ $r->hargaRAM }}</td>
            <td>{{ $r->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
            <td>{{ $r->berat }}</td>
            <td>
                <!-- Link Edit RAM -->
                <a href="{{ route('ram.edit', $r->id) }}" class="btn btn-success">Edit</a>

                <!-- Form untuk Hapus dengan metode DELETE -->
                <form action="{{ route('ram.destroy', $r->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $ram->links() }} <!-- Pagination -->
@endsection
