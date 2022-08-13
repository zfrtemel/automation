<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if (isset(Auth::user()->roleId) != null) {
            if (Auth::user()->roleId == 2 ) {
                return $next($request);
            } else
            {
                return redirect('/admin');
            }
        } else
        {

            return redirect('/login');
        }
    }
}
