<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloModerator
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
        switch (auth::user()->type) {
            case ('1'):
                return redirect('admin');
                break;
            case ('2'):
                return $next($request);
                break;
            case ('3'):
                return redirect('user');
                break;
        }
    }
}
