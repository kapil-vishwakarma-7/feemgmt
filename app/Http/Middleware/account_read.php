<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class account_read
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
        $u = Auth::user();
        echo "string";
        return $next($request);
    }
}
