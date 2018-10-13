<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Request;
use App\Permission;
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


        $per = Auth::user()->permissions;

        $dec =  $per->search(function($value, $key) {
           return (($value['permission_id']+1)==13);
        });
        if(!$dec){
                return response()->json("Unauthorised",403);
        }
        return $next($request);

    }

}
