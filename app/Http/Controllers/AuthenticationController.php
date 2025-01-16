<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    public function index()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Menggunakan Auth untuk login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Cek role setelah login
            $user = Auth::user();

            if ($user->role == 'PATIENT') {
                return redirect()->route('patient.dashboard'); // redirect ke halaman pasien
            } elseif ($user->role == 'DOCTOR') {
                return redirect()->route('doctor.dashboard'); // redirect ke halaman dokter
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
