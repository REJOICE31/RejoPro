<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
class RegisterController extends Controller
{
    public function registrationForm()
    {
        return view('auth.register');
    }
    public function construct()
    {
      //  $this->middleware('auth')->only('logout', 'login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email:rfc,dns|max:50|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect('/');
    }


}
