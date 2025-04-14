<?php

use App\Http\Controllers\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/drivers', function () {
    return view('drivers');
})->name('drivers');

Route::get('/accommodations', function () {
    return view('accommodations');
})->name('accommodations');

Route::get('/tourguide', function () {
    return view('tourguide');
})->name('tourguide');

Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');



Route::get('/stroll', function () {
    return view('stroll');
})->name('stroll');





Route::get('/travelkit', function () {
    return view('travelkit');
})->name('travelkit');




Route::get('/login', function () {
    return view('login');
})->name('login');


