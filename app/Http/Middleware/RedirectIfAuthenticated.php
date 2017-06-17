<?php

namespace App\Http\Middleware;

use App\Entities\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user=new User();
            $user->id=Auth::user()->id;
            $tipo=$user->tipoUser()->id;

            if(($tipo==2)||($tipo==3)){
                return redirect('/usuario/index');
            }else{
            return redirect('/home');
            }
            }

        return $next($request);
    }
}
