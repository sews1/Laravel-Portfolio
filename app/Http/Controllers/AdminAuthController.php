<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function index()
    {
        $data = [
            'content' => 'home/auth/login'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function doLogin(Request $request) // Tambahkan Request $request sebagai parameter
    {
        // Akses data dari request
       // dd($request->all());
       $data = $request->validate([
        'email' => 'required',
        'password' => 'required',
       ]);

       if(Auth::attempt($data)){
        $request->session()->regenerate();
        return redirect('admin/dashboard');

       }

       return back()->with('LoginError', 'Email or Password Not Found' );
    }

    public function logout(Request $request)
    {
    // Mengeluarkan user dari sesi
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

}

