<?php

namespace Database\Seeders;

use App\Models\Semister;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['1st Semister','2nd Semister','3rd Semister','4th Semister','5th Semister','6th Semister','7th Semister','8th Semister','N/A'];
        
        for ($i=0; $i < count($data); $i++) { 
            Semister::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
