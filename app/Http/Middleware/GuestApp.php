<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GuestApp
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
       // dd(session()->all());
        if(isset(session()->all()['nik']) && isset(session()->all()['password'])){
            session()->flash('failed', 'Anda Sudah Login');
            return redirect(url('masyarakat/home'));
        }
        if(isset(session()->all()['username_petugas']) && isset(session()->all()['password'])){
            
            if (session()->all()['level'] == 'admin') {
                session()->flash('failed', 'Anda Sudah Login');
                return redirect(url('petugas/home'));
            }elseif(session()->all()['level'] == 'petugas'){
                session()->flash('failed', 'Anda Sudah Login');
                return redirect(url('admin/home'));
            }elseif(session()->all()['level'] == 'super_admin'){
                session()->flash('failed', 'Anda Sudah Login');
                return redirect(url('superAdmin/home'));
            }
        }
        return $next($request);
        
    }
}
