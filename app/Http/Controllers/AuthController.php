<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function loginVerify(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:users,email',
                'password' => 'required',
            ], [
                'email.required' => 'Email Wajib Di Isi',
                'email.exists' => 'User Tidak Ditemukan',
                'password.required' => 'Password Wajib Di Isi',
            ]);

            $credentials = $request->only(['email', 'password']);

            if (Auth::attempt($credentials)) {
                $user = User::where('email', $request->email)->first();

                if ($user->role == 'admin') {
                    return redirect()->route('filament.admin.pages.dashboard')->with('success', 'Login successfully');
                } else {
                    return redirect()->route('hotel.landing')->with('success', 'Login successfully');
                }
            } else {
                return redirect()->back()->with('error', 'Ada Kesalahan Saat Login');
            }
        } catch (Exception $e) {
            toastr()->warning('Invalid', $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // cibtroller

    public function registerVerify(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email:dns|unique:users,email',
                'password' => 'required|min:7',
                'confirm_password' => 'required|same:password',
            ], [
                'name.required' => 'Nama wajib diisi.',
                'password.required' => 'Kata sandi wajib diisi.',
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah digunakan.',
                'confirm_password.required' => 'Konfirmasi kata sandi wajib diisi.',
                'confirm_password.same' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user'
            ]);

            auth()->login($user);
            toastr()->success('success', 'Register successfully');
            return redirect()->route('hotel.landing');
        } catch (Exception $e) {
            toastr()->warning('invalid', $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        try {
            $user = auth()->user();
            Auth::logout($user);

            toastr()->success('Log successfully');
            return redirect()->route('login')->with('success', 'Logout successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
