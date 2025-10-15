<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\signupRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // signupPage (view), signup (logic)

    public function signupPage()
    {
        return view('auth.signup');
    }

    public function signup(signupRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('login');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $date = $request->only('email', 'password');
        if (auth()->attempt($date)) {
            $request->session()->regenerate();
            return redirect()->route('books.index');
        }
        return back()->withErrors(['auth-error' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
