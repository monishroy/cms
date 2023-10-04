<?php

namespace Database\Seeders;

use App\Models\EmployeeAcademicInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeAcademicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmployeeAcademicInfo::create([
            'employee_id' => "1",
            'academic_exam_id'=> "1",
            'passing_year'=> "1978",
            'board_id'=> "5",
            'roll'=> "487245",
            'reg_no'=> "1468735484",
            'gpa'=>"4.55",
            'marksheet'=>"041020231696434947586-marksheet.jpg",
            'certificate'=>"041020231696434947727-certificate.png",
        ]);

        EmployeeAcademicInfo::create([
            'employee_id' => "1",
            'academic_exam_id'=> "2",
            'passing_year'=> "2002",
            'board_id'=> "6",
            'roll'=> "487274",
            'reg_no'=> "1468739825",
            'gpa'=>"4.25",
            'marksheet'=>"041020231696434947759-marksheet.png",
            'certificate'=>"041020231696434947763-certificate.jpg",
        ]);
    }
}
