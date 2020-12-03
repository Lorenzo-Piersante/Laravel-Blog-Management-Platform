<?php

namespace App\Http\Middleware;

use Closure;

class isStaff
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
        if (\Auth::user()->role == 'staff' OR \Auth::user()->role == 'admin') {
            return $next($request);
        }

        return abort(401);
    }
}
