<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            
            if (Auth::user()->is_admin == 1) {
                return $next($request); 
            }

            return redirect('welcome')->with('error', 'Anda tidak memiliki akses admin');

        } else {
            return redirect('login');
        }

    }
}
