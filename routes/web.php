<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $name = "Nicolò";
    $surname = "Fossati";
    $birthday = [
        'giorno' => "24",
        'mese' => "Luglio",
        'anno' => "2001"
    ];

    $data = [
        'nome' => $name,
        'cognome' => $surname,
        'compleanno' => $birthday
    ];

    return view('home', $data);
});