<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminKepegawaian
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
        if ($role == 'admin_kepegawaian') 
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('pegawai.show', Auth::user()->id)->with([
                'status' => 'You have no admin access'
            ]);
        }
    }
}
