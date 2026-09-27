<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequiresAccount
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) {
            return redirect()->route('register')->with('error', 'Vous devez créer un compte pour pouvoir passer une commande.');
        }

        return $next($request);
    }
}