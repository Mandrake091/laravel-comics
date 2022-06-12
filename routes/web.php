<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
        return view('home', ['comics' => $comics]);
});
$comics = config('comics'); 


foreach($comics as $value => $comic){
    
Route::get('/comic'.$value, function () {
    $comics = config('comics');
        foreach ($comics as $value => $comic) {
          dump($comics[$value]);  
          
          return view('comic', ['comics' => $comics[$value]]);
        }
    
    
 
    
      
});
}