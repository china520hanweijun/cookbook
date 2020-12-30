<?php

use App\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Food::class, 100)->create();
    }
}
