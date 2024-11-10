<?php

namespace Database\Seeders;

use App\Models\Ammunition;
use Illuminate\Database\Seeder;

class AmmunitionSeeder extends Seeder
{
    public function run()
    {
        Ammunition::create([
            'type' => 'Pistol Ammunition',
            'caliber' => '9mm',
            'price' => 15.00,
        ]);

        Ammunition::create([
            'type' => 'Rifle Ammunition',
            'caliber' => '5.56 NATO',
            'price' => 25.00,
        ]);

        Ammunition::create([
            'type' => 'Shotgun Ammunition',
            'caliber' => '12 Gauge',
            'price' => 10.00,
        ]);

        Ammunition::create([
            'type' => 'Pistol Ammunition',
            'caliber' => '.45 ACP',
            'price' => 18.00,
        ]);

        Ammunition::create([
            'type' => 'Rifle Ammunition',
            'caliber' => '.308 Winchester',
            'price' => 30.00,
        ]);
    }
}
