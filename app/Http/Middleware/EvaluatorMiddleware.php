<?php

namespace App\Http\Middleware;

use Closure;

class EvaluatorMiddleware
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
        if (auth()->check() && auth()->user()->role_id==4) {
            return $next($request);
        }
       //return redirect()->home();
       return redirect('/');
    }
}
