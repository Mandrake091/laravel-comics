<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
  public function index() {
    $comics = config('comics');
        return view('home', ['comics' => $comics]);
}
}