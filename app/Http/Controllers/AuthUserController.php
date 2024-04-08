<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function showRegisterForm(Request $request)
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('home');
        }

        return view('auth_user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Patient::create([
            'code' => 'BN-'.time(),
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            return redirect()->back()->withInput()->with('error', 'Đã có lỗi xảy ra trong quá trình đăng ký. Vui lòng thử lại sau!');
        }

        Auth::guard('user')->login($user, true);

        return redirect()->route('home')->with('success', 'Đăng ký thành công!');
    }

    public function showLoginForm(Request $request)
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('home');
        }

        return view('auth_user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('phone', 'password');

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput()->with('error', 'Đã có lỗi xảy ra trong quá trình đăng nhập. Vui lòng thử lại sau!');
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
