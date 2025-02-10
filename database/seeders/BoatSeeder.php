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
            'price' => 2650000,
            'max_people' => 14,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 02',
            'category' => 'Superior',
            'price' => 2650000,
            'max_people' => 22,
            'image' => '/images/superior02/superior02.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 03',
            'category' => 'Superior',
            'price' => 2800000,
            'max_people' => 20,
            'image' => '/images/superior03/superior03.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 04',
            'category' => 'Superior',
            'price' => 2800000,
            'max_people' => 25,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 05',
            'category' => 'Superior',
            'price' => 2800000,
            'max_people' => 18,
            'image' => '/images/amore/amore05.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 06',
            'category' => 'Superior',
            'price' => 2800000,
            'max_people' => 15,
            'image' => '/images/amore/amore06.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 07',
            'category' => 'Superior',
            'price' => 2850000,
            'max_people' => 14,
            'image' => '/images/amore/amore07.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 08',
            'category' => 'Superior',
            'price' => 3950000,
            'max_people' => 16,
            'image' => '/images/amore/amore08.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 09',
            'category' => 'Superior',
            'price' => 3250000,
            'max_people' => 14,
            'image' => '/images/superior/superior09.png',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 10',
            'category' => 'Superior',
            'price' => 3100000,
            'max_people' => 10,
            'image' => '/images/superior/superior10.png',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 11',
            'category' => 'Superior',
            'price' => 3000000,
            'max_people' => 14,
            'image' => '/images/amore/amore11.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 12',
            'category' => 'Superior',
            'price' => 3450000,
            'max_people' => 14,
            'image' => '/images/superior/superior12.png',
            'departure' => ['Monday-Wednesday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 13',
            'category' => 'Superior',
            'price' => 2600000,
            'max_people' => 15,
            'image' => '/images/amore/amore13.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Boat::create([
            'name' => 'Deluxe 01',
            'category' => 'Deluxe',
            'price' => 3350000,
            'max_people' => 16,
            'image' => '/images/deluxe/deluxe01.jpeg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 02',
            'category' => 'Deluxe',
            'price' => 3600000,
            'max_people' => 20,
            'image' => '/images/deluxe/deluxe02.png',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 03',
            'category' => 'Deluxe',
            'price' => 3900000,
            'max_people' => 12,
            'image' => '/images/deluxe/deluxe03.jpeg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 04',
            'category' => 'Deluxe',
            'price' => 3550000,
            'max_people' => 17,
            'image' => '/images/deluxe/deluxe04.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 05',
            'category' => 'Deluxe',
            'price' => 4200000,
            'max_people' => 11,
            'image' => '/images/deluxe/deluxe05.jpg',
            'departure' => ['Monday-Wednesday', 'Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 06',
            'category' => 'Deluxe',
            'price' => 4300000,
            'max_people' => 14,
            'image' => '/images/deluxe/deluxe06.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 07',
            'category' => 'Deluxe',
            'price' => 4000000,
            'max_people' => 13,
            'image' => '/images/deluxe/deluxe07.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Deluxe 08',
            'category' => 'Deluxe',
            'price' => 4000000,
            'max_people' => 13,
            'image' => '/images/deluxe/deluxe06.jpg',
            'departure' => ['Friday-Sunday'],
            'created_at' => now(),
            'updated_at' => now(),
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
