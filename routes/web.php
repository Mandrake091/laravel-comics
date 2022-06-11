<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', ['comics' => $comics]);
});

Route::get('/comic', function () {
    $comics = config('comics');
    return view('comic', ['comics' => $comics]);
});