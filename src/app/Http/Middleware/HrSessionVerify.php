<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HrSessionVerify
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
        $check = $request->session()->has('username');
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
