<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAdmin
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

        if (Auth::guest()) {
            return redirect('/');
        }

        if (Auth::id() != "1") {
            return redirect('/');
        }

        return $next($request);
    }
}
