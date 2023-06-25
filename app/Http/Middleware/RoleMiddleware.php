<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();

        foreach($roles as $role){
            // Jika role sari user saat ini sama dengan role yg diinginkan,
            // maka perbolehkan untuk melanjutkan ke controller
            if($user->role == $role){
                return $next($request);


            }
        }

            // Jika role tidak sesuai, lempar ke halaman 403
            return abort(403);
    }
}
