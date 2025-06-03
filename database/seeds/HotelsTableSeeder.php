<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $hotels = [];

        foreach (range(1, 20) as $id) {
            array_push($hotels, [
                'id' => $id,
                'name' => $faker->unique()->company,
                'description' => $faker->randomElement([
                    'Enjoy a comfortable stay with modern amenities and friendly service.',
                    'Located in the heart of the city, close to shopping and nightlife.',
                    'Relax in spacious rooms with stunning views and 24/7 service.',
                    'Perfect for business trips or weekend getaways.',
                    'A family-friendly hotel with all-inclusive packages.'
                ])
            ]);
        }

        Hotel::insert($hotels);
    }
}
