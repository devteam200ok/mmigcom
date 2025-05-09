<?php

namespace App\Http\Middleware;

use Closure;

class CheckOrganization
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
        if(auth()->user()->role != 'organization'){
            return redirect('/');
        }
        return $next($request);
    }
}
