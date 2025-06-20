@extends('template')

@section('content')
    <a href="/eas" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/eas/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                <p>NRP</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="text" name="nrp" id="nrp" required="required" class="form-control"
                    style="flex:1" autocomplete="off" maxlength="5">
            </div>

            <div class="col-3 mt-2">
                <p>Nilai Angka</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="number" name="nilaiangka" id="nilaiangka" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="numeric" min="0" max="100">
            </div>

            <div class="col-3" mt-2>
                <p>SKS</p>
            </div>
            <div class="col-9 d-flex align-items-center">
                <span class="mr-2">:</span>
                <input type="number" name="sks" id="sks" required="required" class="form-control"
                    style="flex:1" autocomplete="off" inputmode="numeric" min="0" max="4">
            </div>

            <div class="col-9"></div>
            <div class="col-3 mt-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection
