<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comic extends Controller
{
    public function index(){
         $comics = config('comics');
          return view('comic', ['comics' => $comics[1]]);
      } 
}