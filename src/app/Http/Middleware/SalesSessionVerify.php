<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SalesSessionVerify
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
            return redirect()->route('signin.index');
        }

        // if($request->session()->get('type') == 'finance' || $request->session()->get('type') == 'admin'){
        //     return $next($request);
        // }else{
        //     $request->session()->flash('msg', 'Invalid Request');
        //     return redirect()->route('signin.index');
        // }
    }
}
