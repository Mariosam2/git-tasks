<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $apartment = new Apartment();
            $apartment->title = $faker->word();
            $apartment->description = $faker->text(100);
            $apartment->address = $faker->secondaryAddress() ;
            $apartment->check_in = $faker->date();
            $apartment->check_out = $faker->date();
            $apartment->price = $faker->numberBetween(0, 999);
            $apartment->save();
        }
    }
}
