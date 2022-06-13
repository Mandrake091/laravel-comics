<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Home@index')->name('home');



Route::get('/comic', 'Comic@index')->name('comic');