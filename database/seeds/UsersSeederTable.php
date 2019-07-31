<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');
        
        for($i = 1 ; $i <= 10 ; $i++){
        	DB::table('users')->insert([
        	'name' => $faker->name(),
        	'email' => $faker->email(),
            'role' => $faker->domainName(),
            'type' => $faker->domainName(),
            'password' => bcrypt('secret'),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);
        }

    }
}
