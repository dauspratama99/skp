<?php

namespace App\Http\Middleware;

use Closure;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        // dd($roles);
        // dd(auth()->user()->role);
        if(in_array(auth()->user()->role->name,$roles))
        {

            return $next($request);
        }
        return redirect()->route('home');
    }
}
