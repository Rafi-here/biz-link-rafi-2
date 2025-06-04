<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogCode
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('logged_in_code') || empty(session('logged_in_code'))) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
