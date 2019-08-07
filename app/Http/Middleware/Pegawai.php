<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Pegawai
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
        if (Auth::check() && Auth::user()->role == 'pegawai') 
        {
            return $next($request);
        } 
        
        elseif(Auth::check() && Auth::user()->role == 'admin_bagian')
        {
            return redirect(route('surat_undangan.create'));
        }
        
        else {
            return redirect(route('surat_tugas.index'));
        }   
    }
}
