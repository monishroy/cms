<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i < 30; $i++) { 
            # code...
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'image'=>rand(1, 5).'.png',
                'password'=>'$2y$10$esuRKVhX4ACS2uRqTlgXVObavpbVJqh4Lw3BAbV.7dDQIp.XSE3LW',
            ]);
        }
    }
}
