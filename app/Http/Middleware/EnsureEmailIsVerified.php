<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureEmailIsVerified
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user() || !Auth::user()->hasVerifiedEmail()) {
            return redirect('/email/verify');
        }

        return $next($request);
    }
}

