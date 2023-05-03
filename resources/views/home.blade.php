@extends('layouts.app')

@section('page.main')
    



<div class="bg-cata">
    <div class="container">
        <h3>CURRENT SERIES</h3>
        <ul>
            @foreach ($fumetti as $fumetto)
            <li>
                <div class="box">
                    
                   
                    <a href="{{ route('product', ['index' => $loop->index]) }}">
                        <img src="{{ $fumetto['thumb'] }}" alt="Immagine">
                        <div class="serie">{{ $fumetto['title'] }}</div>
                    </a>
                </div>
            </li>
            @endforeach
        </ul>
        <button>LOAD MORE</button>
    </div>
</div>
    
@endsection
