<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Masyarakat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  
        if(!isset(session()->all()['nik']) && !isset(session()->all()['password'])){
            session()->flash('failed', 'Silahkan Login Terlebih Dahulu');
            return redirect(url('masyarakat/login'));
        }
        return $next($request);
    }
}
