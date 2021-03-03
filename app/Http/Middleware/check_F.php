<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class check_F
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
        if(Auth::check() && Auth::user()->isDesignation()=='Forwarder'){
            return $next($request);
        }
        return response('404: Page not found');
    }
}
