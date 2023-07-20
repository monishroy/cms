<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->status == '1') {
            return $next($request);
        }else {
            abort(401);
            // return redirect()->route('login')->with('error','Please enter valid details!');
        }
    }
}
