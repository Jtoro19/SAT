<?php

use Illuminate\Support\Facades\Route;

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
