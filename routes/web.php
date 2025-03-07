<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\RoleMiddleware;


// Página de inicio (acceso libre)
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Dashboard (requiere autenticación)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Protecciones por Rol
    Route::middleware(['role:Employee'])->group(function () {
        Route::get('/reports/index', [ReportsController::class, 'index'])->name('reports.index');
        Route::get('/analystMap', function () {
            return view('analystMap');
        });
        Route::get('/monitoringCenter', function () {
            return view('monitoringCenter');
        });
        Route::get('/precipitation', function () {
            return view('precipitation');
        });
    });

    Route::middleware(['role:Admin'])->group(function () {
        Route::get('/adminMap', function () {
            return view('adminMap');
        });
        Route::get('/adminView', function () {
            return view('adminView');
        });

        // Gestión de usuarios
        Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    });

    Route::middleware(['role:Viewer'])->group(function () {
        Route::get('/userMap', function () {
            return view('userMap');
        });
        Route::get('/notifications/userNotifications', [AlertsController::class, 'showUserNotifications'])->name('notifications.userNotifications');
        Route::post('/reset-notifications', [AlertsController::class, 'resetNotifications'])->name('resetNotifications');

    });

    Route::middleware(['role:Employee'])->group(function () {
        Route::get('/alerts/index', [AlertsController::class, 'index'])->name('alerts.index');
        Route::post('/alerts/store', [AlertsController::class, 'store'])->name('alerts.store');
        Route::get('/alerts/edit/{id}', [AlertsController::class, 'edit'])->name('alerts.edit');
        Route::post('/alerts/update/{id}', [AlertsController::class, 'update'])->name('alerts.update');
        Route::delete('/alerts/destroy/{id}', [AlertsController::class, 'destroy'])->name('alerts.destroy');
        Route::get('/alerts/create/{reportID}', [AlertsController::class, 'create'])->name('alerts.create');
    });
});

require __DIR__.'/auth.php';

