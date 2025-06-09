@extends('template')

@section('content')
    <h3>Edit RAM</h3>

    <form action="{{ route('ram.update', $ram->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="merkRAM">Merk RAM:</label>
            <input type="text" class="form-control" name="merkRAM" value="{{ $ram->merkRAM }}" required>
        </div>
        <div class="form-group">
            <label for="hargaRAM">Harga RAM:</label>
            <input type="number" class="form-control" name="hargaRAM" value="{{ $ram->hargaRAM }}" required>
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia:</label>
            <select class="form-control" name="tersedia" required>
                <option value="1" {{ $ram->tersedia ? 'selected' : '' }}>Tersedia</option>
                <option value="0" {{ !$ram->tersedia ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="berat">Berat:</label>
            <input type="number" step="0.01" class="form-control" name="berat" value="{{ $ram->berat }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
@endsection
