<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class check_CSC
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
        if(Auth::check() && Auth::user()->isDesignation()=='Kiosk Operator'){
            return $next($request);
        }
        return response('404: Page not found');
    }
}
