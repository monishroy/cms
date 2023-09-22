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
        Semister::create([
            'name'=>"1st Semister",
        ]);
        Semister::create([
            'name'=>"2nd Semister",
        ]);
        Semister::create([
            'name'=>"3rd Semister",
        ]);
        Semister::create([
            'name'=>"4th Semister",
        ]);
        Semister::create([
            'name'=>"5th Semister",
        ]);
        Semister::create([
            'name'=>"6th Semister",
        ]);
        Semister::create([
            'name'=>"7th Semister",
        ]);
        Semister::create([
            'name'=>"8th Semister",
        ]);
        Semister::create([
            'name'=>"Complete",
        ]);
        Semister::create([
            'name'=>"N/A",
        ]);
    }
}
