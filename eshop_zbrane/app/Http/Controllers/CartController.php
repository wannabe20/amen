<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knife;
use App\Models\Gun;
use App\Models\Accessory;

class CartController extends Controller
{
    // Přidat položku do košíku
    public function addToCart($type, $id)
    {
        // Zkontroluj typ položky a najdi odpovídající model
        switch ($type) {
            case 'knife':
                $item = Knife::findOrFail($id);
                break;
            case 'gun':
                $item = Gun::findOrFail($id);
                break;
            case 'accessory':
                $item = Accessory::findOrFail($id);
                break;
            default:
                return redirect()->back()->with('error', 'Neznámý typ produktu!');
        }

        // Získání košíku ze session
        $cart = session()->get('cart', []);

        // Vytvoření unikátního klíče pro každou položku
        $uniqueKey = $type . '_' . $id;

        // Pokud je položka už v košíku, zvyš její množství
        if (isset($cart[$uniqueKey])) {
            $cart[$uniqueKey]['quantity']++;
        } else {
            // Jinak ji přidej do košíku s množstvím 1
            $cart[$uniqueKey] = [
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => 1,
                'image' => $item->image ?? null, // Přidání obrázku pokud je dostupný
            ];
        }

        // Ulož košík zpět do session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produkt byl úspěšně přidán do košíku!');
    }

    // Zobrazení košíku
    public function viewCart()
    {
        return view('cart');
    }

    // Odstranit položku z košíku
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]); // Odstranit položku z košíku
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Položka byla odstraněna z košíku.');
    }
}
