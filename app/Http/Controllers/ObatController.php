<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

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
        try {
            $validatedData = $request->validate([
                'code' => 'required|string|unique:drugs,code|max:10',
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
        } catch (\Throwable $th) {
            dd($th->getMessage()); // Menampilkan pesan error validasi
        }
        
        if (empty($validatedData)) {
            dd("Data Kosong");
        } else {
            Obat::create($validatedData); // Menyimpan hanya data yang divalidasi
        }
        
        // Mengarahkan pengguna ke halaman indeks
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
            'code' => 'required|string|max:10|unique:drugs,code,' . $drugs->id,
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $drugs->update([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
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
