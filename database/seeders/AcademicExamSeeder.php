<?php

namespace Database\Seeders;

use App\Models\AcademicExam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['SSC','HSC','Honours','Masters'];
        
        for ($i=0; $i < count($data); $i++) { 
            AcademicExam::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
