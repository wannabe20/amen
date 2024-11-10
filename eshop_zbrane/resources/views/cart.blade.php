@extends('layout')

@section('content')
    @vite('resources/css/welcome.css')

    <h2>Košík</h2>

    {{-- Zobrazit alert pokud existuje success nebo error zpráva --}}
    @section('alerts')
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    @endsection

    @if(session('cart') && count(session('cart')) > 0)
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Název</th>
                    <th>Cena</th>
                    <th>Množství</th>
                    <th>Celková cena</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['price'] }} CZK</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['price'] * $details['quantity'] }} CZK</td>
                        <td>
                            <a href="{{ route('cart.remove', $id) }}" class="remove-item">Odstranit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="total">
            <strong>Celková cena: </strong> 
            @php
                $total = 0;
                foreach (session('cart') as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            @endphp
            <span>{{ $total }} CZK</span>
        </div>
    @else
        <p>Košík je prázdný.</p>
    @endif
@endsection
