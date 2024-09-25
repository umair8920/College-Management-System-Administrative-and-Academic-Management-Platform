<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the role_as set to 'admin'
        if (Auth::check() && Auth::user()->role_as === 'admin') {
            return $next($request);
        }

        // If the user is not authenticated or doesn't have the 'admin' role, abort with 401 Unauthorized
        abort(401);
    }
}
