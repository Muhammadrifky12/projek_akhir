<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Loginnn');
    }

    public function authenticate(Request $request)
    {
        $data=$request->validate([
            'email' => ['required','email'],
            'password' =>['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

          return back()->withErrors([
            'email' => 'Email atau Password Salah ',
          ]);
    }
        public Function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');
        }
}