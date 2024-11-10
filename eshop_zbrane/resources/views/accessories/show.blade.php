@extends('layout')

@vite(['resources/css/accessories.css'])

@section('content')
    <div class="product-detail">
        <h2 class="product-title">{{ $accessory->name }}</h2>
        <img src="{{ asset('images/accessories/' . $accessory->image) }}" alt="{{ $accessory->name }}" class="product-image">
        <p class="product-description">{{ $accessory->description }}</p>
        <p class="product-price"><strong>{{ $accessory->price }} Kč</strong></p>
        <!-- Add to Cart button -->
        <a href="{{ route('cart.add', $accessory->id) }}" class="add-to-cart_Btn">Přidat do košíku</a>
        <a href="{{ route('accessories.index') }}" class="add-to-cart_Btn">Zpět na seznam</a>
    </div>
@endsection
