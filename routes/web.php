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

    $mess = 'Hello World';

    $user = [
        'name' => 'Nicolò',
        'lastname' => 'Pincelli',
        'age' => 32
    ] ;

    $programmings_language = [
        'HTML',
        'CSS',
        'JAVASCRIPT',
        'PHP'
    ];

    return view('home', compact('mess', 'user', 'programmings_language'));
})->name('home') ;


Route::get('/about', function () {

    return view(('about'));
})->name('about') ;