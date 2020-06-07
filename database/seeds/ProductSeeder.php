<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds for the table Products.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 50; $i++) {
            DB::table('products')
                ->insert([
                    'name' => $faker->word,
                    'item_number'=> $faker->randomNumber(),
                    'description' => $faker->sentence,
                    'price' => $faker->randomFloat(2, 0, 1000)
                ]);
        }
    }
}
