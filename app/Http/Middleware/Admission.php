<?php

namespace App\Http\Middleware;

use Closure;

class Admission
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

        $per = \Auth::user()->permissions;

        $dec =  $per->search(function($value, $key) {
           return (($value['permission_id']+1)==16);
        });
        if(!$dec){
                return response()->json(array("Unauthorise User"),403);
        }

        return $next($request);
    }
}
