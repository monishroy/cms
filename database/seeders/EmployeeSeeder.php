<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name'=>"Emdadul Hock",
            'father_name' => "Mahafuz islam",
            'mother_name' => "Farena Khatun",
            'image'=>"240920231695573624-employees.jpg",
            'email'=>"emdadulhaque1995@gmail.com",
            'dob' => "15-Aug-1982",
            'gender' => "M",
            'merital_status' => 'merried',
            'phone' => "01750403009",
            'department_id'=>1,
            'position_id'=>2,
            'blood_group_id' => 5,
            'nationality' => "Bangladeshi",
            'division_id' => 7,
            'district_id' => 59,
            'upazila_id' => 440,
            'present_address' => "Rangpur RCIT",
            'permanent_address' => "Rangpur Sadar",
            'user_id' => 1,
        ]);
    }
}
