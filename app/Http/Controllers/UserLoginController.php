<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AutheticatesUsers;

use Auth;

class UserLoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return redirect()->route('home');
        }
        return view('login');
    }
    public function postLogin(Request $request){
        {
            $request->validate([
                'login'  => 'required',
                'password' => 'required',
            ]);
            $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'nip';
            if(Auth::attempt([$fieldType => $request->login, 'password' => $request->password]))
            {
                return redirect()->route('home')->with('success','Selamat datang');
            }
            return redirect()->route('login.index')->with('errors','Username atau password salah!');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login.index');
    }

}
