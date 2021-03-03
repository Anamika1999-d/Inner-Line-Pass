<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class check_ADC
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
        if(Auth::check() && Auth::user()->isDesignation()=='ADC'){
            return $next($request);
        }
        return response('404: Page not found');
    }
}
