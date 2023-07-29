<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
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
            Student::create([
                'fname'=>$faker->name,
                'lname'=>'Roy',
                'roll'=>rand(1000, 9999),
                'registration'=>rand(1000, 9999),
                // 'image'=>$faker->imageUrl(),
                'department_id'=>1,
                'session_id'=>1,
                'semister_id'=>1,
                'phone'=>$faker->phoneNumber,
                'gPhone'=>$faker->phoneNumber,
                'address'=>$faker->address,
            ]);
        }
    }
}
