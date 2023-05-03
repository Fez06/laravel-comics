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

{{--                          TALENT --}}

                <div class="left">
                    <h2>Talent</h2>
                    <div class="box">
                        <div class="title">Art by:</div>
                        <div class="content">
                            @foreach ($fumetti['artists'] as $artist)
                            @if ($loop->last)
                                {{ $artist }}
                            @else
                                {{ $artist }},  
                            @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="box">
                        <div class="title">Written by:</div>
                        <div class="content">
                            @foreach ($fumetti['writers'] as $writer)
                            @if ($loop->last)
                                {{ $writer }}
                            @else
                                {{ $writer }},  
                            @endif
                            @endforeach
                        </div>
                    </div>

                </div>

{{--                          SPECS --}}

                <div class="right">
                    <h2>Specs</h2>
                    <div class="box">
                        <div class="title">Series:</div>
                        <div class="content">
                            {{$fumetti['series']}}
                        </div>
                    </div>

                    <div class="box">
                        <div class="title">U.S. Price:</div>
                        <div class="content">
                            {{$fumetti['price']}}
                        </div>
                    </div>

                    <div class="box">
                        <div class="title">On Sale Date:</div>
                        <div class="content">
                            {{$fumetti['sale_date']}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
</div>
@endsection