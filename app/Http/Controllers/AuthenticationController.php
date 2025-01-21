<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AuthenticationController extends Controller
{
   public function login(Request $request) {
    // dd($request);
    $auth = Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
    ]);

    if (!$auth) {
        return back()->with('error', 'Login gagal');
    }

    return redirect()->route('dashboard.index')->with('success', 'Login Berhasil');
   }

   public function create()
    {
        return view('admin.createICD'); // Arahkan ke form input
    }
    
}
