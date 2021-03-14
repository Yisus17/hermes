<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterOnlyByAdmin
{
    const NOT_REGISTRATION_ALLOWED = 'No está autorizado a registrar usuarios';

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
                return redirect('home-moderator')->with('ERROR', self::NOT_REGISTRATION_ALLOWED);  
                break;
            case ('3'):
                return redirect('home-simple-user')->with('ERROR', self::NOT_REGISTRATION_ALLOWED); 
                break;
        }
    }
}
