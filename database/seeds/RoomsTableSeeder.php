<?php

use App\Hotel;
use App\RoomType;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = Hotel::all();
        $roomTypes = RoomType::pluck('id');

        foreach($hotels as $hotel)
        {
            for($i = 1; $i <= mt_rand(10,20); $i++)
            {
                $hotel->rooms()->create([
                    'name' => mt_rand(100,400),
                    'room_type_id' => $roomTypes->random()
                ]);
            }
        }
    }
}
