<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'name'=>"2018-19",
        ]);
        Session::create([
            'name'=>"2019-20",
        ]);
        Session::create([
            'name'=>"2020-21",
        ]);
        Session::create([
            'name'=>"2021-22",
        ]);
        Session::create([
            'name'=>"2022-23",
        ]);
        Session::create([
            'name'=>"2023-24",
        ]);
    }
}
