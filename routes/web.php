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
        'compleanno' => $birthday,
        'page' => 'HOME'
    ];

    return view('home', $data);
});

Route::get('/about-us', function () {
    $data = [
        'page' => 'ABOUT-US'
    ];

    return view('about-us', $data);
});

Route::get('/contact-us', function () {
    $data = [
        'page' => 'CONTACT-US'
    ];
    return view('contact-us', $data);
});

Route::get('/news', function () {
    $data = [
        'page' => 'NEWS'
    ];
    return view('news', $data);
});