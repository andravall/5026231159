<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    // Menampilkan semua data nilai
    public function index()
    {
        // Mengambil data dari tabel nilai dengan pagination
        $nilai = DB::table('nilai')->paginate(10);

        // Mengirim data nilai ke view index
        return view('nilai.index', ['nilai' => $nilai]);
    }

    public function tambah()
    {
        // Memanggil view tambah
        return view('nilai.tambah');
    }

    // Menyimpan data Nilai baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nrp' => 'required|size:5',
            'nilaiangka' => 'required|numeric|min:0|max:100',
            'sks' => 'required|numeric|min:1|max:4',
        ]);

        // Simpan data ke database
        DB::table('nilai')->insert([
            'nomorindukmahasiswa' => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
        ]);

        return redirect('/eas')->with('success', 'Data Nilai berhasil ditambahkan!');
    }

    // Menghapus data nilai
    public function hapus($id)
    {
        // Menghapus data nilai berdasarkan ID
        DB::table('nilai')->where('id', $id)->delete();

        // Alihkan halaman ke halaman daftar nilai dengan pesan sukses
        return redirect('/eas')->with('success', 'Data Nilai berhasil dihapus!');
    }
}
