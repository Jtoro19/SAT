<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Redirección dinámica según el rol del usuario autenticado.
     */
    public static function home()
    {
        $user = Auth::user();
        
        if (!$user) {
            return '/dashboard'; // Redirección por defecto
        }

        return match ($user->roleID) {
            1 => '/adminView',    // Admin
            2 => '/analystMap',   // Employee
            3 => '/userMap',      // Viewer
            default => '/dashboard',
        };
    }

    /**
     * Define tus bindings de rutas y configuraciones.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configurar limitadores de tasa.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
