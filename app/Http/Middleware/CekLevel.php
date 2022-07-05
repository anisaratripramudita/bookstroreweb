<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    

public function handle($request, Closure $next,...$levels)
{
   if(in_array($request->user()->role,$levels)){
    return $next($request);
   }
   if(Auth::user()->role=='admin'){
    return Redirect::to('admin');
   }elseif(Auth::user()->role=='pembeli'){
    return Redirect::to('home');
   }
}
}
