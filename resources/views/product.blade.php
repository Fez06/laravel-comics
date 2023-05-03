@extends('layouts.app')

@section('page.main')

<div class="product">
    
        
    <div class="blue-stripe">
        <div class="container">
            <img src="{{$fumetti['thumb']}}" alt="{{$fumetti['title']}}">
        </div>
    </div>

    <div class="flexy">
        <div class="container">
            <div class="mainInfo">
                <h1>{{$fumetti['title']}}</h1>
                <div class="props">
                    <div class="price-avaible">
                        <div class="price">U.S. Price: {{$fumetti['price']}}</div>
                        <div class="avaible">AVAIABLE</div>
                    </div>
                    <div class="check">
                        Check Availability
                    </div>
                </div>
                <p>{{$fumetti['description']}}</p>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container">
            <div class="flexy">
                <div class="left">
                    <h2>Talent</h2>
                    <div class="box"></div>
                </div>
                <div class="right">
                    <h2>Specs</h2>
                </div>
            </div>

        </div>

    </div>
    
</div>
@endsection