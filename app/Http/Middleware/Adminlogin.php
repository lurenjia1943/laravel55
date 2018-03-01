<?php

namespace App\Http\Middleware;

use Closure;

class Adminlogin
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
        if (!session('key')) {
            return response()->view('admin.login');
        }
        return $next($request);
    }
}
