<?php

use Illuminate\Database\Seeder;

class CarSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Car_specification::class, 5)->create();
    }
}
