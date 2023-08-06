<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function register (Request $request){
        
        $user = new User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        $request->session()->regenerate();

        return redirect(route('home'));
    }
    
    public function login (Request $request){
        
        $credenciales = [
            "email"=> $request->email,
            "password"=> $request->password,
        ];

        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }else{
            return redirect('home');
        }

    }

    public function logout (Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
