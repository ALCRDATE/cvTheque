<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {   
        switch ($guard) {

            default:
                if(Auth::guard($guard)->check()){
                    if(Auth::user()->role == 1){
                        return redirect()->route('espaceEntreprise');
                    }else{
                        return redirect()->route('espaceCondidat');
                    }
                    
                }
                break;
        }
            return $next($request);    
    } 
       
}
