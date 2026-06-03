<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login dan memiliki role admin [cite: 365]
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, kembalikan ke dashboard dengan pesan error
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki hak akses admin.');
    }
}