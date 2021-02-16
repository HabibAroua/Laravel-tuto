<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //add this line to identify <<Auth>>

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::onceBasic()) //This is HTTP Basic Authentication without setting a user identifier cookie in the session
        {
            return response()->json(["message"=>"Auth failed"],401);
        }
        else
        {
            return $next($request);
        }
    }
}
