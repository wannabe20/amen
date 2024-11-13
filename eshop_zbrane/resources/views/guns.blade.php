@extends('layout')

@vite(['resources/css/welcome.css', 'resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css', 'resources/css/Knives.css'])

@section('content')
    <h2 class="product-title">Seznam zbraní</h2>

    @if(!empty($guns) && count($guns) > 0)
        <div class="new-product-grid">
            @foreach($guns as $gun)
                <div class="new-product-card">
                    <img src="{{ asset('images/guns/' . $gun->image) }}" alt="{{ $gun->name }}" class="product-image">
                    <h3 class="product-name">{{ $gun->name }}</h3>
                    <p class="product-description">{{ $gun->description }}</p>
                    <p class="product-price"><strong>{{ $gun->price }} CZK</strong></p>
                    <a href="{{ route('cart.add', ['type' => 'gun', 'id' => $gun->id]) }}" class="add-to-cart_Btn">Přidat do košíku</a>
                </div>
            @endforeach
        </div>
    @else
        <p>Momentálně nemáme skladem žádné zbraně. Omlouváme se.</p>
    @endif
@endsection
