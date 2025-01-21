<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; // Pastikan model Admin sudah ada


class AdminController extends Controller
{
    public function createAdmin()
    {
        return view('admin.createAdmin'); // Arahkan ke form input
    }
    public function createICD()
    {
        return view('admin.createICD'); // Arahkan ke form input
    }

    public function createKlinik()
    {
        return view('admin.createKlinik'); // Arahkan ke form input
    }
    
    
    public function storeAdmin(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'klinik' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Simpan ke database
        Admin::create([
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']), // Hash password
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'klinik' => $validated['klinik'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
        ]);

        return redirect()->route('admin.createAdmin')->with('success', 'Admin berhasil ditambahkan!');
    }

    public function storeICD(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kode' => 'required|string|max: 10',
            'nameEN' => 'required|string|max:255',
            'nameID' => 'required|string|max:255',
            
        ]);

        // Simpan ke database
        Admin::create([
            'kode' => $validated['kode'],
            'namaEN' => $validated['namaID'], 
            'nameID' => $validated['namaID'],
        ]);

        return redirect()->route('dokter.createICD')->with('success', 'ICD berhasil ditambahkan!');
    }
    public function storeKlinik(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'kode' => 'required|string|max: 10',
            'nameEN' => 'required|string|max:255',
            'nameID' => 'required|string|max:255',
            
        ]);

        // Simpan ke database
        Admin::create([
            'kode' => $validated['kode'],
            'namaEN' => $validated['namaID'], 
            'nameID' => $validated['namaID'],
        ]);

        return redirect()->route('dokter.createICD')->with('success', 'ICD berhasil ditambahkan!');
    }
    
}
