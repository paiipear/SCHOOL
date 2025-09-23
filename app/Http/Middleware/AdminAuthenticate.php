<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (! Auth::guard('web')->check()) {
            return redirect()->guest(route('login'));
        }
        $user = Auth::guard('web')->user();
        if (! $user || ($user->role ?? null) !== 'admin') {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
