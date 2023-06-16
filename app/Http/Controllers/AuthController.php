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

        // $user = User::where('email','=',$request->email)->first();

        
        $user = $request->only('email','password');
        
        if(!$user){
            return redirect()->route("login");
        }

        Auth::attempt($user);
        dd(Auth::user());

        return redirect()->route('kategori.index');
    }
}
