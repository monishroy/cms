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

        $data = ['Computer','Electrical','Electronics','Civil','Mechanical','Textail','N/A'];
        
        for ($i=0; $i < count($data); $i++) { 
            Department::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
