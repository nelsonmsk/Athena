<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Starter;


class StartersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
 
        // Create 10 Starter records
        foreach(range(1,10) as $index)
		{
            Starter::create([
                'type' => $faker->text(30),			
                'name' => $faker->text(30),
                'description' => $faker->text(50),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
                'image' => $faker->word(20),
                'imagePath' => $faker->imageUrl(),
                'username' => $faker->userName,				
            ]);
        }
    }
}
