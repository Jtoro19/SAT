<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\AlertsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/products/info', function() {
//     return view('/products/info');
// });


Route::get('/analystMap', function() {
    return view('/analystMap');
});

Route::get('/monitoringCenter', function() {
    return view('/monitoringCenter');
});

Route::get('/precipitation', function() {
    return view('/precipitation');
});

Route::get('/userMap', function() {
    return view('/userMap');
});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/reports/index', [ReportsController::class, 'index'])->name('reports.index');


Route::get('/alerts/index', [AlertsController::class, 'index'])->name('alerts.index');


Route::post('alerts/store', [AlertsController::class, 'store'])->name('alerts.store');
Route::get('alerts/edit/{id}', [AlertsController::class, 'edit'])->name('alerts.edit');
Route::post('alerts/update/{id}', [AlertsController::class, 'update'])->name('alerts.update');
Route::delete('alerts/destroy/{id}', [AlertsController::class, 'destroy'])->name('alerts.destroy');

Route::get('alerts/create/{reportID}', [AlertsController::class, 'create'])->name('alerts.create');

