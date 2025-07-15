<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return Auth::user()->type === 'admin'
                ? redirect()->intended(route('admin.dashboard'))
                : redirect()->intended(route('home'));
        }

        // Jika gagal login, kembalikan ke form login dengan pesan error
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function supplierRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nama_perusahaan' => 'required|string|max:255',
            'phone' => 'nullable|string|max:25',
            'address' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048'
        ]);

        $profilePicture = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        User::create([
            'name' => $validated['name'],
            'nama_perusahaan' => $validated['nama_perusahaan'],
            'phone' => $validated['phone'] ?? null,
            'address' => $validated['address'] ?? null,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'profile_picture' => $profilePicture,
            'type' => 'supplier',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function doRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048'
        ]);

        $profilePicture = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'profile_picture' => $profilePicture,
            'type' => $request->is_supplier ? 'supplier' : 'client',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil logout.');
    }

    public function updateAccount(Request $request)
{
    $user = User::find(Auth::id());

    $rules = [
        'name' => 'required|string|max:255',
        'nama_perusahaan' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
    ];

    if ($request->filled('password') || $request->filled('current_password')) {
        $rules['current_password'] = 'required';
        $rules['password'] = 'required|confirmed|min:3';
    }

    // Validasi dengan pengecualian untuk AJAX
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }
        return back()->withErrors($validator)->withInput();
    }

    $validated = $validator->validated();

    if ($request->filled('password')) {
        if (! Hash::check($request->input('current_password'), $user->password)) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Password saat ini salah.',
                ], 422);
            }
            return back()->withErrors(['current_password' => 'Password saat ini salah.'])->withInput();
        }

        $user->password = Hash::make($validated['password']);
    }

    $user->name = $validated['name'];
    $user->phone = $validated['phone'] ?? null;
    $user->address = $validated['address'] ?? null;

    if ($user->type === 'supplier' && isset($validated['nama_perusahaan'])) {
        $user->nama_perusahaan = $validated['nama_perusahaan'];
    }

    if ($request->hasFile('profile_picture')) {
        $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
    }

    $user->save();

    if ($request->expectsJson()) {
        return response()->json(['success' => true]);
    }

    return back()->with('success', 'Akun berhasil diperbarui!');
}
}