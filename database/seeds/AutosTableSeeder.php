<?php

use Illuminate\Database\Seeder;
use App\Auto;
use Faker\Generator as faker;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $randomPrice = rand(10000,20000);
            $newAuto = new Auto;
            $newAuto->producer = $faker->word;
            $newAuto->model = $faker->word;
            $newAuto->img = 'https://i.picsum.photos/id/111/300/200.jpg';
            $newAuto->price = $randomPrice;
            $newAuto->description = $faker->text($maxNbChars = 150);
            $newAuto->save();   
        }
    }
}
