<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name'=>"Computer",
        ]);
        Department::create([
            'name'=>"Electrical",
        ]);
        Department::create([
            'name'=>"Electronics",
        ]);
        Department::create([
            'name'=>"Civil",
        ]);
        Department::create([
            'name'=>"Mechanical",
        ]);
        Department::create([
            'name'=>"Textail",
        ]);
        Department::create([
            'name'=>"N/A",
        ]);
    }
}
