<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'fname'=>"Monish",
            'lname'=>'Roy',
            'image'=>rand(1, 5).'.png',
            'email'=>"monishroy87@gmail.com",
            'roll'=>"407401",
            'registration'=>"1502002992",
            'department_id'=>1,
            'session_id'=>2,
            'semister_id'=>8,
            'phone'=>"01817603163",
            'gPhone'=>"01745112645",
            'address'=>"Lalmonirhat",
        ]);
        Student::create([
            'fname'=>"Ronobir",
            'lname'=>'Roy',
            'image'=>rand(1, 5).'.png',
            'email'=>"roymonish712@gmail.com",
            'roll'=>"407402",
            'registration'=>"1502002993",
            'department_id'=>1,
            'session_id'=>2,
            'semister_id'=>5,
            'phone'=>"01717568377",
            'gPhone'=>"01745112645",
            'address'=>"Lalmonirhat",
        ]);
    }
}
