<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Zobrazí stránku pro checkout
        return view('checkout');
    }

    public function processOrder(Request $request)
    {
        // Zde můžeš zpracovat objednávku, například uložení údajů o zákazníkovi
        // a zpracování platby (pokud používáš platební bránu)

        $cart = session()->get('cart', []);

        if (count($cart) == 0) {
            return redirect()->route('cart.view')->with('error', 'Košík je prázdný!');
        }

        // Představme si, že zákazník zadá své údaje (např. jméno, adresa)
        // Uložení objednávky do databáze nebo zpracování platby zde

        // Vyprázdnění košíku po dokončení objednávky
        session()->forget('cart');

        return redirect()->route('cart.view')->with('success', 'Objednávka byla úspěšně dokončena!');
    }
}
