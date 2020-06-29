<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 30; $i++) { 
            Product::create([
                'title' => $faker->sentence(3),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(8),
                'description'=> $faker->text,
                'price' => $faker->numberBetween(15, 300) *100,
                'image' => 'https://via.placeholder.com/250x250'

            ]);
        }
    }
}
