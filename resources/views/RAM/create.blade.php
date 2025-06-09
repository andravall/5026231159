@extends('template')

@section('content')
    <h3>Tambah RAM Baru</h3>

    <form action="{{ route('ram.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="merkRAM">Merk RAM:</label>
            <input type="text" class="form-control" name="merkRAM" required>
        </div>
        <div class="form-group">
            <label for="hargaRAM">Harga RAM:</label>
            <input type="number" class="form-control" name="hargaRAM" required>
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia:</label>
            <select class="form-control" name="tersedia" required>
                <option value="1">Tersedia</option>
                <option value="0">Tidak Tersedia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="berat">Berat:</label>
            <input type="number" step="0.01" class="form-control" name="berat" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Data</button>
    </form>
@endsection
