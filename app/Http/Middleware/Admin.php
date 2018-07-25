<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
    //     if (Auth::guard($guard)->check()) {
    //         return redirect('/home');
    //     }
        if(Auth::check()){
            if(Auth::user()->roles != "admin"){
                // echo "<script>alert('you are not an admin')</script>";
                return redirect('/error');
            }
        }else{
                return redirect('/login');

        }

        return $next($request);
    }
}
