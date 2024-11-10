@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>{{ $gun->name }}</h1>
    <p>{{ $gun->description }}</p>
    <p><strong>Category:</strong> {{ $gun->category->name }}</p>
    <p><strong>Price:</strong> ${{ $gun->price }}</p>
    <a href="/" class="btn btn-secondary">Back to Store</a>
</div>
@endsection
