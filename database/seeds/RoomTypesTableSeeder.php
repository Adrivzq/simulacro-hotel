<?php

use App\RoomType;
use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $roomTypes = [];
        $roomNames = [
            'Single Room',
            'Double Room',
            'Twin Room',
            'Deluxe Room',
            'Suite',
            'Studio',
            'Family Room',
            'Executive Suite',
            'Presidential Suite',
            'Penthouse'
        ];

        foreach(range(1,10) as $id)
        {
            array_push($roomTypes, [
                'id' => $id,
                'name' => $roomNames[$id - 1],
            ]);
        }

        RoomType::insert($roomTypes);
    }
}
