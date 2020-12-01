<?php

namespace App\Http\Middleware;

use Closure;

class TwinAuth
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
        if(false == session("twin_auth")){
			return redirect("/");
		}
        return $next($request);
    }
}
