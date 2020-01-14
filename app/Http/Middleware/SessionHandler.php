<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use Session;
use Route;
class SessionHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $route = $request->route()->getActionName();
        if(Session::has('userRow')){
            $email=Session::get('userRow')['email'];
            $token=Session::get('userRow')['token'];
            $user = User::where(['token','=',$token],['email','=',$email])->first();
            if($user){
                return $next($request);
            }else{
                Session::forget('userRow');
                return  redirect('/');
            }
        }else if(explode('@',$route)[1]==='login'
        ||explode('@',$route)[1]==='recover'){
            return $next($request);
        }else{
            Session::forget('userRow');
            return  redirect('/');
        }
        
    }
}
