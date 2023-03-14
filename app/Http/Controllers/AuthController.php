<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login()
   {
    return view('login');
   }

   public function masuk(Request $request)
   {
       $credentials = $request->validate([
           'name' => ['required'],
           'password' => ['required'],
       ]);

       if (Auth::guard('user')->attempt($credentials)) {
           $request->session()->regenerate();

           return redirect()->intended('/');
       }

       elseif (Auth::guard('petugas')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('');
    }
       elseif (Auth::guard('pengguna')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('user');
    }
        return back();;
   
   }

   public function register(Request $request)
   {
   $data = $request->validate([
    'nama' => 'required',
    'email' => 'required',
    'nik' => 'required',
    'telp' => 'required',
    'tgl_lahir' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
    'nama' => 'required',
   ]);
   }


   public function logout(Request $request)
   {
    if (Auth::guard('user')->check()){
        Auth::guard('user')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('login');
     
    }
    elseif (Auth::guard('petugas')->check()) {
        Auth::guard('petugas')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('login');
         
    }

    elseif (Auth::guard('pengguna')->check()) {
        Auth::guard('pengguna')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('login');
         
    }
   }
  

}
