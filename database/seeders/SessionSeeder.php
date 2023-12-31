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
        $data = ['2018-19','2019-20','2020-21','2021-22','2022-23','2023-24'];
        
        for ($i=0; $i < count($data); $i++) { 
            Session::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
