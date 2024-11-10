<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gun;
use Illuminate\Database\Seeder;

class GunStoreSeeder extends Seeder
{
    public function run()
    {
        // Vytvoření kategorií
        $category1 = Category::create(['name' => 'Pistols']);
        $category2 = Category::create(['name' => 'Rifles']);
        $category3 = Category::create(['name' => 'Shotguns']);

        // Vytvoření zbraní
        Gun::create([
            'name' => 'Glock 19',
            'description' => 'Kompaktní, spolehlivá 9mm',
            'price' => 20000,
            'category_id' => $category1->id,
            'image' => 'glock_19.png', // Přidání obrázku
        ]);

        Gun::create([
            'name' => 'AR-15',
            'description' => 'Lehká plynová zbraň',
            'price' => 20000,
            'category_id' => $category2->id,
            'image' => 'ar_15.png', // Přidání obrázku
        ]);

        Gun::create([
            'name' => 'Remington 870',
            'description' => 'Klasická pumpovací brokovnice',
            'price' => 10000,
            'category_id' => $category3->id,
            'image' => 'remington_870.png', // Přidání obrázku
        ]);

        Gun::create([
            'name' => 'Glock 17',
            'description' => 'Modovaný 45154998',
            'price' => 18390,
            'category_id' => $category1->id,
            'image' => 'glock_17.png', // Přidání obrázku
        ]);

        Gun::create([
            'name' => 'Revolver',
            'description' => 'Silný revolver ráže .355',
            'price' => 22000,
            'category_id' => $category1->id,
            'image' => 'revolver.png', // Přidání obrázku
        ]);
    }
}
