<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use Illuminate\Http\Request;

class RAMController extends Controller
{
    // Menampilkan semua data RAM
    public function index()
    {
        // Mengambil semua data RAM dari database `belajar_laravel`
        $ram = RAM::paginate(10);  // Menampilkan 10 data per halaman
        return view('RAM.index', compact('ram'));
    }

    // Menampilkan form untuk menambah RAM
    public function create()
    {
        return view('RAM.create');
    }

    // Menyimpan data RAM baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'merkRAM' => 'required|max:25',
            'hargaRAM' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        // Simpan data RAM
        RAM::create($request->all());

        // Kembalikan ke halaman daftar RAM dengan pesan sukses
        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil ditambahkan!');
    }

    // Menampilkan form untuk edit data RAM
    public function edit($id)
{
    // Cari data RAM berdasarkan ID
    $ram = RAM::findOrFail($id);
    return view('RAM.edit', compact('ram'));
}

    // Menyimpan perubahan data RAM
    public function update(Request $request, $id)
    {
        // Cari data RAM berdasarkan ID
        $ram = RAM::findOrFail($id);

        // Validasi input
        $request->validate([
            'merkRAM' => 'required|max:25',
            'hargaRAM' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        // Update data RAM
        $ram->update($request->all());

        // Kembalikan ke halaman daftar RAM dengan pesan sukses
        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil diubah!');
    }

    // Menghapus data RAM
    public function destroy($id)
    {
        // Cari data RAM berdasarkan ID
        $ram = RAM::findOrFail($id);

        // Hapus data RAM
        $ram->delete();

        // Kembalikan ke halaman daftar RAM dengan pesan sukses
        return redirect()->route('ram.index')->with('success', 'Data RAM berhasil dihapus!');
    }
}
