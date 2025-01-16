<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'username' => 'required|min:1',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:1', // Pastikan password memiliki panjang minimal
    ]);

    // Cek apakah password ada di request
    if (!$request->has('password')) {
        return back()->withErrors(['password' => 'Password is required.']);
    }

    try {
        // Hash password sebelum menyimpannya
        $hashedPassword = Hash::make($request->password);

        // Membuat user baru dengan data yang sudah di-hash password-nya
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);

        return redirect()->route('users.index')->with('success', 'User Berhasil Ditambahkan.');
    } catch (\Throwable $th) {
        // Menampilkan error jika terjadi kesalahan
        dd("Ini baca error: " . $th->getMessage());
    }
}


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
       

        $request->validate([
            'username' => 'required||min:1',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required|min:1',
        ]);

        try {
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
            ]);
        } catch (\Throwable $th) {
            dd("Ini baca error: " . $th->getMessage());
        }

       

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
