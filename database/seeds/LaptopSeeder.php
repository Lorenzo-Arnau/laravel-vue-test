<?php

use Illuminate\Database\Seeder;
use App\Laptop;
use Faker\Generator as Faker;
class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i=0; $i < 20; $i++) {
           $laptop= new Laptop();
           $laptop->model = $faker->word();
           $laptop->price = rand(10,500);
           $laptop->save();
        }
    }
}
