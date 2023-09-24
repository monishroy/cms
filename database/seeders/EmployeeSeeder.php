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
            'image'=>"240920231695573624-employees.jpg",
            'email'=>"emdadulhaque1995@gmail.com",
            'phone'=>"01750403009",
            'department_id'=>1,
            'position_id'=>2,
        ]);
    }
}
