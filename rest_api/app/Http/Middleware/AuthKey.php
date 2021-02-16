<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthKey
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
        $token = $request->header('APP_KEY'); //if you want to create this file you should run the command "php artisan make:middleware AuthKey"
        if($token != "ABCDEFGHIJK")
        {
            return response()->json(["message" => "App key not found"], 401); //401 the request requires user authentication . the response must include WWW-authenticate header field
        }
        else
        {
            return $next($request);
        }
    }
}
