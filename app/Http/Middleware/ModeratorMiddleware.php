<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ModeratorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (User::check()) {
            $user = User::user();

            // Check if the user has the "Moderator" role
            if ($user->role->key === 'Moderator') {
                // Redirect or show an error page as desired
                return redirect()->route('home')->with('error', 'Access denied for Moderators.');
            }
        }

        return $next($request);
    }
}
