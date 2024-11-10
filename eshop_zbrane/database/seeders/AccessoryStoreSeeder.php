<?php

namespace Database\Seeders;

use App\Models\Accessory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class AccessoryStoreSeeder extends Seeder
{
    public function run()
    {
        // Vytvoření kategorií
        $category1 = Category::create(['name' => 'Scopes']);
        $category2 = Category::create(['name' => 'Grips']);
        $category3 = Category::create(['name' => 'Silencers']);
        $category4 = Category::create(['name' => 'Bipods']);
        $category5 = Category::create(['name' => 'Lights']); // Kategorie pro světla

        // Vytvoření příslušenství
        Accessory::create([
            'name' => 'Rifle Scope',
            'description' => 'High-precision scope for long-range targeting.',
            'price' => 3500,
            'image' => 'rifle_scope.png',
            'category_id' => $category1->id,
        ]);

        Accessory::create([
            'name' => 'Tactical Grip',
            'description' => 'Provides better handling and stability.',
            'price' => 1200,
            'image' => 'tactical_grip.png',
            'category_id' => $category2->id,
        ]);

        Accessory::create([
            'name' => 'Silencer',
            'description' => 'Reduces sound for stealth shooting.',
            'price' => 2500,
            'image' => 'silencer.png',
            'category_id' => $category3->id,
        ]);

        // Změněná položka místo Precision Bipod
        Accessory::create([
            'name' => 'Tactical Flashlight',
            'description' => 'High-powered flashlight for tactical operations.',
            'price' => 1800,
            'image' => 'tactical_flashlight.png',
            'category_id' => $category5->id,
        ]);

        Accessory::create([
            'name' => 'Tactical Light',
            'description' => 'Powerful flashlight for night operations, attaches easily to firearms.',
            'price' => 2000,
            'image' => 'tactical_light.png', // Obrázek pro Tactical Light
            'category_id' => $category5->id, // Kategorie pro světla
        ]);
    }
}
