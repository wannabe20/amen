@extends('layout')

@section('content')
    @vite('resources/css/welcome.css', 'resources/css/layout.css')

    <div class="cart-container">
        <h2 class="cart-title">Košík</h2>

        {{-- Display alert if there is a success or error message --}}
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
                <tbody>
                    @foreach(session('cart') as $id => $details)
                        <tr>
                            <td class="item-name">{{ $details['name'] }}</td>
                            <td class="item-price">{{ $details['price'] }} CZK</td>
                            <td class="item-quantity">{{ $details['quantity'] }}</td>
                            <td class="item-total">{{ $details['price'] * $details['quantity'] }} CZK</td>
                            <td class="item-action">
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
            <p class="cart-empty">Košík je prázdný.</p>
        @endif
    </div>
@endsection
