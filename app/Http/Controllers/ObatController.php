<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'drugs'
        $drugs = Obat::all();
        return view('obat.index', compact('drugs'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        // Validasi sesuai dengan nama kolom dan tabel 'drugs'
        $request->validate([
            'kode_drug' => 'required|string|unique:drugs,kode_drug|max:10',
            'nama_drug' => 'required|string|max:255',
            'deskripsi_drug' => 'nullable|string',
        ]);

        // Menyimpan data ke tabel 'drugs'
        Obat::create($request->all());
        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function show(Obat $drugs)
    {
        return view('obat.show', compact('drugs'));
    }

    public function edit(Obat $drugs)
    {
        return view('obat.edit', compact('drugs'));
    }

    public function update(Request $request, Obat $drugs)
    {
        // Validasi untuk update, pastikan kode_drug sesuai dengan record yang ada
        $request->validate([
            'kode_drug' => 'required|string|max:10|unique:drugs,kode_drug,' . $drugs->id,
            'nama_drug' => 'required|string|max:255',
            'deskripsi_drug' => 'nullable|string',
        ]);

        $drugs->update([
            'kode_drug' => $request->kode_drug,
            'nama_drug' => $request->nama_drug,
            'deskripsi_drug' => $request->deskripsi_drug,
        ]);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy(Obat $drugs)
    {
        // Menghapus data dari tabel 'drugs'
        $drugs->delete();
        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
