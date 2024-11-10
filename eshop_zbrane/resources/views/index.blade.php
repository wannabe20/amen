@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Available Guns</h1>
    <div class="row">
        @foreach ($guns as $gun)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $gun->name }}</h5>
                    <p class="card-text">{{ $gun->description }}</p>
                    <p class="card-text"><strong>Price: ${{ $gun->price }}</strong></p>
                    <a href="/guns/{{ $gun->id }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
