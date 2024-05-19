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

Route::get('/', function () {
    $mercancia = [
        ['nombre' => 'mercancia 1', 'valor' => 250.000],
        ['nombre' => 'mercancia 2', 'valor' => 100.000],
        ['nombre' => 'mercancia 3', 'valor' => 50.000],
    ];
    $nombre = "Daniel Chávez";
    return view('welcome', ['mercancias' => $mercancia ], ['nombre' => $nombre]);
});

//Route::view ('/contacto', 'contacto' ();
