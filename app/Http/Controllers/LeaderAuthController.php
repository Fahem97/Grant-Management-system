<?php

namespace App\Http\Controllers;

use App\Models\Academician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeaderAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.leader-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'staff_number' => 'required',
            'email' => 'required|email',
        ]);

        $leader = Academician::where('staff_number', $request->staff_number)
            ->where('email', $request->email)
            ->first();

        if ($leader) {
            Session::put('leader_id', $leader->id);
            return redirect()->route('leader.dashboard')->with('success', 'Logged in successfully.');
        }

        return back()->withErrors(['Invalid credentials.']);
    }

    public function logout()
    {
        Session::forget('leader_id');
        return redirect()->route('leader.login')->with('success', 'Logged out successfully.');
    }
}
