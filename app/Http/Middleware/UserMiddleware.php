<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status == 'user') {
            return $next($request);
        }

        return redirect('/');
    }
}
