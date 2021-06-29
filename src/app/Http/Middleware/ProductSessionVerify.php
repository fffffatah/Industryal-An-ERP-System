<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductSessionVerify
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
        $check = $request->session()->has('login');
        if($check)
        {
            return $next($request);
        }
        else
        {
            return back();
        }
    }
}
