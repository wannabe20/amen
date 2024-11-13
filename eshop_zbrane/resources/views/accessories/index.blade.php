@extends('layout')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css', 'resources/css/Knives.css', 'resources/css/welcome.css'])

@section('content')
    <h2 class="product-title">Seznam doplňků ke zbraním</h2>

    @if(!empty($accessories) && count($accessories) > 0)
        <div class="new-product-grid">
            @foreach($accessories as $accessory)
                <div class="new-product-card">
                    <img src="{{ asset('images/accessories/' . $accessory->image) }}" alt="{{ $accessory->name }}" class="product-image">
                    <h3 class="product-name">{{ $accessory->name }}</h3>
                    <p class="product-description">{{ $accessory->description }}</p>
                    <p class="product-price"><strong>{{ $accessory->price }} Kč</strong></p>
                    <a href="{{ route('cart.add', ['type' => 'accessory', 'id' => $accessory->id]) }}" class="add-to-cart_Btn">Přidat do košíku</a>
                </div>
            @endforeach
        </div>
    @else
        <p>Momentálně nemáme skladem žádné doplňky ke zbraním. Omlouváme se.</p>
    @endif
@endsection
