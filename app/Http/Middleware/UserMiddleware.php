<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // First check authentication
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Then verify user type
        $user = Auth::user();

        if ($user->user_type === 'admin') {
            // Special handling for admins
            return redirect()->route('admin/dashboard')
                ->with('error', 'Administrative access required');
        }

        if ($user->user_type !== 'user') {
            // Handle other non-user types
            abort(403, 'User account required to access this resource');
        }

        return $next($request);
    }
}
