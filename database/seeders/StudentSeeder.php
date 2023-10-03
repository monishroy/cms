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
            'father_name' => "Ramanath Braman",
            'mother_name' => "Anjali Rani",
            'image' => rand(1, 5).'.png',
            'email' => "monishroy87@gmail.com",
            'roll' => "407401",
            'registration' => "1502002992",
            'dob' => "11-Aug-2002",
            'gender' => "M",
            'phone' => "01817603163",
            'guardian_phone' => "01745112645",
            'department_id' => 1,
            'semister_id' => 8,
            'session_id' => 2,
            'blood_group_id' => 5,
            'nationality' => "Bangladeshi",
            'division_id' => 7,
            'district_id' => 55,
            'upazila_id' => 417,
            'present_address' => "Dhaka Mirpur 10",
            'permanent_address' => "Lalmonirhat",
            'status' => "1",
            'user_id' => 2,
        ]);
    }
}
