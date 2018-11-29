<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class Take
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
          if(Session::has('userid')){                  
        //dd('hi');                               
        return view('welcome');
    } else {                                                                                                                     
        return Redirect('/login')->with('message','You are not Logged In...!!!');                                                                        
    }
 
        return $next($request);
    }
}
