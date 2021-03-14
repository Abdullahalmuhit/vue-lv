<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,110) as $index) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'detail' => $faker->paragraph,
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
