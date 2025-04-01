<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // First check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Then verify admin status
        if (Auth::user()->user_type !== 'admin') {
            // abort(403, 'Unauthorized access');
            return redirect()->route('dashboard')->withErrors(['error' => 'Admin access required']);
        }

        return $next($request);
    }
}
