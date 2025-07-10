<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale($request->segment(1));

        URL::defaults(['locale' => $request->segment(1), 'slug' => $request->segment(3)]);

        return $next($request);
    }
}
