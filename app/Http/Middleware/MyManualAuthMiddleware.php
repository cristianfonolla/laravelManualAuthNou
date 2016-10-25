<?php

namespace App\Http\Middleware;

use Closure;

class MyManualAuthMiddleware
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
        if($request->has('id')){
            return $next($request);
        }
        return redirect('login');
    }
}
