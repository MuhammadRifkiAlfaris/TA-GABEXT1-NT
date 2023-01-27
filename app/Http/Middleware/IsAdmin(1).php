<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == 'admin'){
            return $next($request);
        }

        Session::flash('error', 'You don\'t have admin access.');
        return redirect()->route('memberDashboard');
        
    }
}
