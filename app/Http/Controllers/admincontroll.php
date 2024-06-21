<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroll extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if ($credentials['username'] === 'admin' && $credentials['password'] === '1234') {
            // Login berhasil, simpan session atau lakukan tindakan lain
            return redirect()->route('dash'); // Ganti 'dashboard' dengan route yang sesuai
        } else {
            // Login gagal, kirimkan pesan kesalahan
            return back()->withErrors(['message' => 'Invalid username or password'])->withInput();
        }
    }
}

?>