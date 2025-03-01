<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirige si no está autenticado
        }

        // Obtener el rol del usuario autenticado
        $userRole = Auth::user()->role->roleName; // Usar 'roleName' en lugar de 'name'

        // Verificar si el rol del usuario está en la lista de roles permitidos
        if (!in_array($userRole, $roles)) {
            abort(403, 'Acceso denegado');
        }

        return $next($request);
    }
}



