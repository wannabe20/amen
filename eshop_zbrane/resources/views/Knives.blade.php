@extends('layout')

@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css', 'resources/css/Knives.css', 'resources/css/welcome.css'])

@section('content')
    <h2 class="product-title">Seznam nožů</h2>

    @if(!empty($knives) && count($knives) > 0)
        <div class="new-product-grid">
            @foreach($knives as $knife)
                <div class="new-product-card">
                    <img src="{{ asset('images/knives/' . $knife->image) }}" alt="{{ $knife->name }}" class="product-image">
                    <h3 class="product-name">{{ $knife->name }}</h3>
                    <p class="product-description">{{ $knife->description }}</p>
                    <p class="product-price"><strong>{{ $knife->price }} Kč</strong></p>
                    <a href="{{ route('cart.add', ['type' => 'knife', 'id' => $knife->id]) }}" class="add-to-cart_Btn">Přidat do košíku</a>
                </div>
            @endforeach
        </div>
    @else
        <p>Momentálně nemáme skladem žádné nože. Omlouváme se.</p>
    @endif
@endsection
