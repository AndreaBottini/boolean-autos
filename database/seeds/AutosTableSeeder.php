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

        $fakerAuto = (new \Faker\Factory())::create();
        $fakerAuto->addProvider(new\Faker\Provider\Fakecar($fakerAuto));

        for ($i=0; $i < 10 ; $i++) {
            $randomPrice = rand(10000,20000);
            $newAuto = new Auto;
            $newAuto->producer = $fakerAuto->vehicleBrand;
            $newAuto->model = $fakerAuto->vehicleModel;
            $newAuto->img = 'https://i.picsum.photos/id/111/300/200.jpg';
            $newAuto->price = $randomPrice;
            $newAuto->description = $faker->text($maxNbChars = 150);
            $newAuto->save();
        }
    }
}
