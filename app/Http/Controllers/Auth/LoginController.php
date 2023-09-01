<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function store(Request $request){
      $request->validate(
    [
        'email'=>'required',
        'password'=>'required'
    ]
    );
    dd("user created successfully");
    }
    public function loginForm()
    {
         if(Auth::user()){
            return redirect('/');
        }else{
            return view('auth.login');
        }
        
    }
        /**
         * Handle an authentication attempt.
         */
      
   public function authenticate(Request $request){
        $this->validate($request,[ 
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }else{
            return back()->withErrors([
                'password' => 'The provided credentials do not match our records.',])->onlyInput('password');
        }
    }
    public function logout(){        
        Auth::logout();
        return redirect()->route('login');
      
      }
    
}