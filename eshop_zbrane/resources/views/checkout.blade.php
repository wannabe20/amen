@extends('layout')

@section('content')
    <h2>Pokladna</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <h3>Vaše produkty</h3>
            <table>
                <thead>
                    <tr>
                        <th>Název</th>
                        <th>Cena</th>
                        <th>Počet</th>
                        <th>Celkem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['price'] }} Kč</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['quantity'] * $details['price'] }} Kč</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                <strong>Celková cena: </strong>{{ $totalPrice }} Kč
            </div>

            <h3>Údaje o zákazníkovi</h3>
            <label for="name">Jméno</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Adresa</label>
            <input type="text" id="address" name="address" required>

            <button type="submit">Dokončit objednávku</button>
        </form>
    @else
        <p>Košík je prázdný.</p>
    @endif
@endsection
