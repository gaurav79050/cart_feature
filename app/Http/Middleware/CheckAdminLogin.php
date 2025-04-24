<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userId = $request->session()->get('userId');
        if (!$userId || !User::find($userId)) {
            
            $request->session()->flush();
            return redirect()->route('login')->with('error', 'Session expired or invalid. Please login again.');
        }
        $user = User::find($userId);

        if ( $user->user_type == '1' ) {
            return $next($request);
        }
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    
    }
}
