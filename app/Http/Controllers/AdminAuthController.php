<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    // Show Admin Login Form
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    // Handle Admin Login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && md5($request->password) === $admin->password) {
            Session::put('admin_id', $admin->id);

            // Redirect to the academicians index route after login
            return redirect()->route('academicians.index')->with('success', 'Logged in successfully.');
        }

        return back()->withErrors(['Invalid credentials.']);
    }

    // Handle Admin Logout
    public function logout()
    {
        Session::forget('admin_id');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
