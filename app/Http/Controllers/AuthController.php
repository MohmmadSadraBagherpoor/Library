<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register.form');
    }

    public function register(RegisterRequest $request)
    {
        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($member);
        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.login.form');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'error' => 'invalid data',
        ]);

    }
}
