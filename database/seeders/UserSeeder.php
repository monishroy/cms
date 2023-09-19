<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Monish Roy",
            'email'=>"monishroy87@gmail.com",
            'phone'=>"01817603163",
            'role'=>"admin",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
        ]);
        User::create([
            'name'=>"Ronobir Roy",
            'email'=>"roymonish712@gmail.com",
            'phone'=>"01717568377",
            'role'=>"user",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
        ]);
        User::create([
            'name'=>"Monish Roy",
            'email'=>"monishroycoder@gmail.com",
            'phone'=>"01580487212",
            'role'=>"librarian",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
        ]);
    }
}
