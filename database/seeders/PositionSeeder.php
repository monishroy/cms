<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Assistant Teacher','Department Head'];
        
        for ($i=0; $i < count($data); $i++) { 
            Position::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
