<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChekAge
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
        if($request->Chek <=18){
            return redirect("home");
        }
        return $next($request);
    }
}