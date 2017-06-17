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
            $user=User::find(Auth::user()->id);
            $status=1;
            foreach ($user as $u){
                $status=$u->status;
            }
            if($status==1){
            return redirect('/home');
            }else{
                return $next($request);
            }
            }

        return $next($request);
    }
}
