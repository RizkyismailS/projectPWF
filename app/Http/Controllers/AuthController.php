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
    public function SupllierRegister(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'nama_perusahaan' => $request->type === 'supplier' ? 'required|string|max:255' : 'nullable|string|max:255',
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3|confirmed',
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048'
        
    ]);

    $profilePicture = null;
    if ($request->hasFile('profile_picture')) {
        $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    // Simpan data ke database
    $user = User::create([
        'name' => $validated['name'],
        'nama_perusahaan' => $validated['nama_perusahaan'],
        'phone' => $validated['phone'] ?? null,
        'address' => $validated['address'] ?? null,
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'profile_picture' => $profilePicture,
        'type' => $request->is_supplier ? 'supplier' : 'client', 
    ]);

    // Login user setelah registrasi
    // Auth::login($user);

    // Redirect ke halaman utama
    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
}
public function doRegister(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:3|confirmed',
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048'
        
    ]);

    $profilePicture = null;
    if ($request->hasFile('profile_picture')) {
        $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    // Simpan data ke database
    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'profile_picture' => $profilePicture,
        'type' => $request->is_supplier ? 'supplier' : 'client', 
    ]);

    // Login user setelah registrasi
    // Auth::login($user);

    // Redirect ke halaman utama
    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
}
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'Berhasil logout.');
}
}
