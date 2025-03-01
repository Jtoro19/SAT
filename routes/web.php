<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\AlertsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (requiere autenticación)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para el registro de usuarios
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Rutas de vistas personalizadas
Route::get('/analystMap', function() {
    return view('analystMap');
});

Route::get('/monitoringCenter', function() {
    return view('monitoringCenter');
});

Route::get('/precipitation', function() {
    return view('precipitation');
});

Route::get('/userMap', function() {
    return view('userMap');
});

// Rutas de ReportsController
Route::get('/reports/index', [ReportsController::class, 'index'])->name('reports.index');

// Rutas de AlertsController
Route::get('/alerts/index', [AlertsController::class, 'index'])->name('alerts.index');
Route::post('/alerts/store', [AlertsController::class, 'store'])->name('alerts.store');
Route::get('/alerts/edit/{id}', [AlertsController::class, 'edit'])->name('alerts.edit');
Route::post('/alerts/update/{id}', [AlertsController::class, 'update'])->name('alerts.update');
Route::delete('/alerts/destroy/{id}', [AlertsController::class, 'destroy'])->name('alerts.destroy');
Route::get('/alerts/create/{reportID}', [AlertsController::class, 'create'])->name('alerts.create');

// Incluir las rutas de autenticación generadas por Breeze
require __DIR__.'/auth.php';

