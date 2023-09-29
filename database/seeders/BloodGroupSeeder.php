<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['A+','A-','B+','B-','O+','O-','AB+','AB-'];
        
        for ($i=0; $i < count($data); $i++) { 
            BloodGroup::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
