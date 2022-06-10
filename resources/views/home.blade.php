@extends('layouts.layout')

@section('main')
<div class="container">
    <div class="current-series">
    <h3>current series</h3>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['series']}}</p>
        </div>
        @endforeach
    </div>
</div>

<h1>Ciao!</h1>
<a href="/comic"><button> vai ad un altra pagina</button></a>
@endsection
