@extends('layouts.app')

@section('page.main')
    

<div class="jumbo"></div>

<div class="bg-cata">
    <div class="container">
        <h3>CURRENT SERIES</h3>
        <ul>
            @foreach ($fumetti as $fumetto)
            <li>
                <div class="box">
                    <img src="{{ $fumetto['thumb'] }}" alt="Immagine">
                    <div class="serie">{{ $fumetto['title'] }}</div>
                </div>
            </li>
            @endforeach
        </ul>
        <button>LOAD MORE</button>
    </div>
</div>
    
@endsection
