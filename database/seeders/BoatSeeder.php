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
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => 'Monday - Wednesday, Friday - Sunday', // Pastikan nilai ini ada
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 02',
            'category' => 'Superior',
            'price' => 4750000,
            'max_people' => 16,
            'image' => '/images/superior02/superior02.jpg',
            'departure' => 'Monday - Wednesday, Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 03',
            'category' => 'Superior',
            'price' => 2950000,
            'max_people' => 15,
            'image' => '/images/superior03/superior03.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 04',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/superior04/superior04.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 05',
            'category' => 'Superior',
            'price' => 3950000,
            'max_people' => 15,
            'image' => '/images/amore/amore05.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 06',
            'category' => 'Superior',
            'price' => 3550000,
            'max_people' => 15,
            'image' => '/images/amore/amore06.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 07',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/amore/amore07.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 08',
            'category' => 'Superior',
            'price' => 3950000,
            'max_people' => 15,
            'image' => '/images/amore/amore08.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 09',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/amore/amore09.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 10',
            'category' => 'Superior',
            'price' => 3950000,
            'max_people' => 15,
            'image' => '/images/amore/amore10.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 11',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/amore/amore11.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 12',
            'category' => 'Superior',
            'price' => 3950000,
            'max_people' => 15,
            'image' => '/images/amore/amore12.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Boat::create([
            'name' => 'Superior 13',
            'category' => 'Superior',
            'price' => 3750000,
            'max_people' => 15,
            'image' => '/images/amore/amore13.jpg',
            'departure' => 'Friday - Sunday',
            'created_at' => now(),
            'updated_at' => now(),
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
