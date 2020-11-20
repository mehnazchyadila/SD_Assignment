<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use Session;
use Illuminate\Support\Facades\Hash;
class IsLoggedIn
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
        if(!Session::has('userid')){
            return redirect()->to('login');
        }
        return $next($request);
    }
}
