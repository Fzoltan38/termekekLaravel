<?php

namespace App\Http\Middleware;

use Closure;

class verefiyisadmin
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
        if (!auth()->check()) {
            return redirect(route('login'));
        }
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Hozzáférés megtagadva.');
        }
        return $next($request);
    }
}
