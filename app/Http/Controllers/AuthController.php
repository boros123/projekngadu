<?php

namespace App\Http\Controllers;

use App\Models\Ngaduan;
use App\Models\Pengguna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller

{
    public function cetakPertanggal($tglAwal, $tglAkhir)
    {
        $pengaduans = Ngaduan::all()->whereBetween('created_at', [$tglAwal, $tglAkhir]);
        return view('Dashboard.cetak', [
            'title' => 'cetak',
            'pengaduans' => $pengaduans
        ]);
    }
   public function login()
   {
    return view('login');
   }

   public function daftar()
   {
    return view('register');
   }

  

   public function masuk(Request $request)
   {
       $credentials = $request->validate([
           'username' => ['required'],
           'password' => ['required'],
       ]);

       if (Auth::guard('user')->attempt($credentials)) {
           $request->session()->regenerate();

           return redirect()->intended('/dashboard');
       }

       elseif (Auth::guard('petugas')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }
       elseif (Auth::guard('pengguna')->attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/user');
    }
    else{
        return back()->with('loginerror','Gagal Masuk Mungkin Password Atau Username Anda Salah');
    }
    

   
   }

   public function register(Request $request)
   {
   $data = $request->validate([
    'nama' => 'required',
    'nik' => 'required|unique:penggunas',
    'tlp' => 'required',
    'kelamin' => 'required',
    'username' => 'required|unique:penggunas',
    'email' => 'required|unique:penggunas',
    'password' => 'min:6|required',
    'remember_token' => Str::random(10),
   ]);

   $data['password'] = Hash::make($data['password']);
   Pengguna::create($data);
   return redirect('login');
    // if ($data){
    //     return redirect('/login');
    // }else{
    //     return redirect('/');
    // }
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
    
        return redirect('/');
         
    }
    else {
        
    }

   }

}
