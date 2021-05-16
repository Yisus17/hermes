<?php

namespace App\Http\Middleware;

use App\Models\Budget;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BudgetAccess
{
    const NOT_ALLOWED = 'No está autorizado ';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $budgetIdInURL= $request->route('budget');
        $budget = Budget::findOrFail($budgetIdInURL);
        $currentUser = auth::user();
        
        return $budget->contact();

        switch ($currentUser->role_id) {
            case ('1'):
                return $next($request);
                break;
            case ('2'):
                if($budget->contact()->company_id == $currentUser->company_id){
                    return $next($request);
                }
                return redirect('home-moderator')->with('ERROR', self::NOT_ALLOWED);  
                break;
            case ('3'):
                return redirect('home-simple-user')->with('ERROR', self::NOT_ALLOWED); 
                break;
        }
        return $next($request);
    }
}
