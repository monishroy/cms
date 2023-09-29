<?php

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Barisal','Chattogram','Cumilla','Dhaka','Dinajpur','Jashore','Mymensingh','Rajshahi','Sylhet','Technical Education Board','Madrasah Education Board'];
        
        for ($i=0; $i < count($data); $i++) { 
            Board::create([
                'name'=>$data[$i],
            ]);
        }
    }
}
