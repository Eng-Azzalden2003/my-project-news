<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SelectiveMaintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $pathsUnderMaintenance = [
            // 'news',
            // 'news/sport',
            // 'news/tech',
        ];

        $bypassToken = '1';

        if (in_array($request->path(), $pathsUnderMaintenance)) {

            if (
                $request->query('secret') === $bypassToken ||
                $request->cookie('bypass_maintenance') === $bypassToken
            ) {
                cookie()->queue(cookie('bypass_maintenance', $bypassToken, 60));
                return $next($request);
            }

            return response()->view('errors.503', [], 503);
        }

        return $next($request);
    }
}
