<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard($guards)->check()) {
            $user = Auth::user(); 
            $role=$user->role->pluck('roleName')->first();
           // dd($role);
            switch ($role) {
                case 'manager':
                  return redirect('/dashboard');
                  break;
                case 'admin':
                  return redirect('/dashboard');
                  break; 

                default:
                  return redirect('/login');
                break;
              }
          }

        return $next($request);
    }
}
