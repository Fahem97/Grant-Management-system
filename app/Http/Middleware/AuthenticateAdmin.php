<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthenticateAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('admin_id')) {
            return redirect()->route('login')->withErrors(['Please log in first.']);
        }

        return $next($request);
    }
}
