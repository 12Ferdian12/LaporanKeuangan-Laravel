<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(Request $request){

        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)) {
            // dd(Auth::user());
            return redirect()->route('kategori.index');
        }

        // dd("password / email salah");
        
        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

}
