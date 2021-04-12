<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductOnlyOnCompany
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
        $productIdInURL= $request->route('product');
        $product = Product::where('id', $productIdInURL)->first();


        $currentUser = auth::user();
        switch ($currentUser->role_id) {
            case ('1'):
                return $next($request);
                break;
            case ('2'):
                if($product->company_id == $currentUser->company_id){
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
