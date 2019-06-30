<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        if (Auth::check() && Auth::user()->role == 'admin_bagian') 
        {
            return $next($request);
        } 
        
        elseif(Auth::check() && Auth::user()->role == 'admin_kepegawaian')
        {
            return redirect('/admin_kepegawaian');
        }
        
        else {
            return redirect('/pegawai')->with('session', 'Anda tidak memiliki hak akses');
        }
        
    }
}
