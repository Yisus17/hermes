<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        switch (auth::user()->type) {
            case ('1'):
                return $next($request);
                break;
            case ('2'):
                return redirect('home-moderator');
                break;
            case ('3'):
                return redirect('home-user');
                break;
        }
    }
}
