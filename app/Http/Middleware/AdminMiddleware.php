<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        //Si el usuario no inició sesión lo redirigimos a login
        if (!auth()->check())
            return redirect('login');

        //Si no es administrador redirecciona a home
        if (auth()->user()->role != 0)
            return redirect('home');

        return $next($request);
    }
}
