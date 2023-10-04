<?php

namespace Database\Seeders;

use App\Models\StudentAcademicInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentAcademicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentAcademicInfo::create([
            'student_id' => "1",
            'academic_exam_id'=> "1",
            'passing_year'=> "2019",
            'board_id'=> "5",
            'board_roll'=> "387345",
            'reg_no'=> "1468835684",
            'gpa'=>"4.35",
            'marksheet'=>"041020231696440273333-marksheet.jpg",
            'certificate'=>"041020231696440273361-certificate.png",
        ]);
        StudentAcademicInfo::create([
            'student_id' => "1",
            'academic_exam_id'=> "2",
            'passing_year'=> "2022",
            'board_id'=> "5",
            'board_roll'=> "384445",
            'reg_no'=> "1468755684",
            'gpa'=>"4.65",
            'marksheet'=>"041020231696440273719-marksheet.png",
            'certificate'=>"041020231696440273481-certificate.jpg",
        ]);
    }
}
