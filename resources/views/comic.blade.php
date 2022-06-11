@extends('layouts.layout')
@section('main')

<section>
    <div class="line">
    </div>
    <div class="comic-container">
        <div class="comic">
                <img src="{{$comics[$key]['thumb']}}" alt="">
                <p>view gallery</p>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sx">
                <h1>{{$comics[$key]['title']}}</h1>
                <div class="price">
                    <p>U.S Price: {{$comics[$key]['price']}}</p>
                    <p>AVAILABLE</p>
                    <p>Check Availability</p>
                </div>
                <div>
                    {{$comics[$key]['description']}}
                </div>
            </div>
            <div class="col-dx">
                <img src="{{$comics[$key]['thumb']}}" alt="">

            </div>
        </div>
       
        
    </div>



        
<div class="container">
    <div class="row">
        <div class="card-container">
            <img src="./images/buy-comics-digital-comics.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-merchandise.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-subscriptions.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-comics-shop-locator.png" alt="">
            <p>digital comics</p>
        </div>
        <div class="card-container">
            <img src="./images/buy-dc-power-visa.svg" alt="">
            <p>digital comics</p>
        </div>
    </div>
</div>
</section>

@endsection