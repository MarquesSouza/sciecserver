<?php

namespace App\Http\Middleware;

use App\Entities\User;
use Closure;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Auth;

class AdimAuthentic
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
        if (Auth::guard($guard)->check()){
        $user=new User();
        $user->id=Auth::user()->id;
        $tipo=$user->tipoUser()->get()->all();
        foreach ($tipo as $t){
            $tipouser=$t->id;
        }
        if(isset($tipouser)) {
            if (($tipouser == 2) || ($tipouser == 3)) {

            }else {
                return $next($request);
            };
        }else{
                return redirect('home');
            }
        };
        return $next($request);

        }
}
