<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthenticateLeader
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('leader_id')) {
            return redirect()->route('leader.login')->withErrors(['Please log in first.']);
        }

        return $next($request);
    }
}
