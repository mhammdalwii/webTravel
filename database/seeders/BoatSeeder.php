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

        Boat::create([
            'name' => 'Superior 04',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/superior04/superior04.jpg',
        ]);

        Boat::create([
            'name' => 'Deluxe 01',
            'category' => 'Deluxe',
            'price' => 4250000,
            'max_people' => 15,
            'image' => '/images/deluxe01/deluxe01.jpg',
        ]);

        Boat::create([
            'name' => 'Deluxe 02',
            'category' => 'Deluxe',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/deluxe02/deluxe02.jpg',
        ]);

        Boat::create([
            'name' => 'Deluxe 03',
            'category' => 'Deluxe',
            'price' => 3950000,
            'max_people' => 15,
            'image' => '/images/deluxe03/deluxe03.jpg',
        ]);


        Boat::create([
            'name' => 'Luxury 01',
            'category' => 'Luxury',
            'price' => 4750000,
            'max_people' => 15,
            'image' => '/images/luxury01/luxury01.jpg',
        ]);

        Boat::create([
            'name' => 'Luxury 02',
            'category' => 'Luxury',
            'price' => 4950000,
            'max_people' => 15,
            'image' => '/images/luxury02/luxury02.jpg',
        ]);

        Boat::create([
            'name' => 'Luxury 03',
            'category' => 'Luxury',
            'price' => 5250000,
            'max_people' => 15,
            'image' => '/images/luxury03/luxury03.jpg',
        ]);
    }
}
