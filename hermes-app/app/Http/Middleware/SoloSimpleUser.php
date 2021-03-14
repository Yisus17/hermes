<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloSimpleUser
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
                return redirect('home');
                break;
            case ('2'):
                return redirect('home-moderator');
                break;
            case ('3'):
                return $next($request);
                break;
        }
    }
}
