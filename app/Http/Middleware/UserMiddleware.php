<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        if(auth()->check()){
            return $next($request);
        }else{
            return redirect('/login');
        }
        // if(($path == "login") || ($path == "register") && Session::get('user')){
        //     return redirect('/dashboard');
        // }elseif((($path != "login") && !Session::get('user')) && (($path != "register") && !Session::get('user'))){
        //     return redirect('/login');
        // }
    }
}
