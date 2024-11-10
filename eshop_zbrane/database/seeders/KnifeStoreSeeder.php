<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Knife;
use Illuminate\Database\Seeder;

class KnifeStoreSeeder extends Seeder
{
    public function run()
    {
        $category1 = Category::create(['name' => 'Fixed Blade']);
        $category2 = Category::create(['name' => 'Folding Knife']);
        $category3 = Category::create(['name' => 'Kitchen Knife']);

        Knife::create([
            'name' => 'Folding Knife',
            'description' => 'Compact folding knife with stainless steel blade.',
            'price' => 1200,
            'image' => 'folding_knife.png',
            'category_id' => $category2->id,
        ]);

        Knife::create([
            'name' => 'Chef Knife',
            'description' => 'Versatile kitchen knife for all chopping tasks.',
            'price' => 2500,
            'image' => 'chef_knife.png',
            'category_id' => $category3->id,
        ]);

        Knife::create([
            'name' => 'Survival Knife',
            'description' => 'Sturdy sharp knife for daily outdoor survival.',
            'price' => 3000,
            'image' => 'survival_knife.png',
            'category_id' => $category1->id,
        ]);

        Knife::create([
            'name' => 'Utility Knife',
            'description' => 'Multi-purpose utility knife for everyday use.',
            'price' => 900,
            'image' => 'utility_knife.png',
            'category_id' => $category2->id,
        ]);

        Knife::create([
            'name' => 'Santoku Knife',
            'description' => 'Japanese-style kitchen knife for slicing and dicing.',
            'price' => 2800,
            'image' => 'santoku_knife.png',
            'category_id' => $category3->id,
        ]);
    }
}