<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create('App\Product');
            for($i = 1 ; $i <= 10 ; $i++){
                DB::table('products')->insert([
                'name' => $faker->name(),
                'price' => $faker->numberBetween(1000,1000000),
                'barcode' => $faker->numberBetween(11111111,99999999),
                'description' => $faker->sentence(),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
            }
    
        }
    }
}
