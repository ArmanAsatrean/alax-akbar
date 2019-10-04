<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (\Auth::user()->isAdmin()) {
            return $next($request);
        }
        
        if (\Auth::user()->isUser())
        return redirect('/');
        return $next($request);
    }
}
