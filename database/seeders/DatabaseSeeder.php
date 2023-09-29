<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DepartmentSeeder::class,
            SemisterSeeder::class,
            SessionSeeder::class,
            PositionSeeder::class,
            BloodGroupSeeder::class,
            BoardSeeder::class,
            AcademicExamSeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            UpazilaSeeder::class,
            StudentSeeder::class,
            UserSeeder::class,
            NoticeSeeder::class,
            // EmployeeSeeder::class,
        ]);
    }
}
