<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect('/admin/templates');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $adminUsername = env('ADMIN_USERNAME', 'admin');
        $adminPassword = env('ADMIN_PASSWORD', 'rahasia123');

        if (
            $username === $adminUsername &&
            $password === $adminPassword
        ) {
            session(['admin_logged_in' => true]);
            return redirect('/admin/templates');
        }

        return back()->withErrors(['message' => 'Username atau password salah!']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/admin/login');
    }
}
