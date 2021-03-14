<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ItemSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 500) as $index){
            DB::table('_items')->insert([
                'name' => $faker->name,
                'details' => $faker->text,
                'price' => $faker->numberBetween(1, 100),
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
