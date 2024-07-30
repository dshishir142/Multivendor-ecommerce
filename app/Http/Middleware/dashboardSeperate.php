<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class dashboardSeperate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth::user()->getRole->role_name;
        switch ($role) {
            case "admin":
                return redirect('/adminPage');
            case "seller":
                return redirect('seller');
            default:
                return $next($request);
        }
    }
}
