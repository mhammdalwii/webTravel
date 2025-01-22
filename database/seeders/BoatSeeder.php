<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Boat;

class BoatSeeder extends Seeder
{
    public function run()
    {
        Boat::create([
            'name' => 'Superior 01',
            'category' => 'Superior',
            'price' => 3350000,
            'max_people' => 15,
            'image' => '/images/amore/amore1.jpg',
        ]);

        Boat::create([
            'name' => 'Superior 02',
            'category' => 'Superior',
            'price' => 4750000,
            'max_people' => 16,
            'image' => '/images/superior02/superior02.jpg',
        ]);

        Boat::create([
            'name' => 'Superior 03',
            'category' => 'Superior',
            'price' => 2950000,
            'max_people' => 15,
            'image' => '/images/superior03/superior03.jpg',
        ]);
    }
}
