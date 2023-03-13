<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
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
        if(!isset(session()->all()['username_petugas']) && !isset(session()->all()['password'])){
            session()->flash('failed', 'Silahkan Login Terlebih Dahulu');
            return redirect(url('petugas/login'));
        }
        if (isset(session()->all()['username_petugas']) && isset(session()->all()['password'])) {
            if (session()->all()['level'] == 'super_admin') { return $next($request); }
        }
        if(session()->all()['level'] == 'petugas'){
            session()->flash('failed', 'Anda Bukan sesi Super Admin');
            return redirect(url('petugas/home'));   
        }
        if(session()->all()['level'] == 'admin'){
            session()->flash('failed', 'Anda Bukan sesi Super Admin');
            return redirect(url('admin/home'));   
        }
        return $next($request);
    }
}
