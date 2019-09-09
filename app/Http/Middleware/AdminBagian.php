<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminBagian
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
        $role = Auth::user()->role;
        if ($role == 'admin_bagian' || $role == 'admin_kepegawaian') 
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home')->with([
                'status' => 'You have no admin access'
            ]);
        }
    }
}
