<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    public function register()
    {
        return view('auth.register');
    }
    public function doRegister(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3|confirmed',
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048'
    ]);

    $profilePicture = null;
    if ($request->hasFile('profile_picture')) {
        $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'profile_picture' => $profilePicture,
    ]);

    Auth::login($user);
    return redirect()->route('home');
}

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
