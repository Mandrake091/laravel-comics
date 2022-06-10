<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', ['comics' => $comics]);
});

Route::get('/comic', function () {
    return view('comic');
});
