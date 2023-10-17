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
            'name'=>"Super Admin",
            'bio'=>"I love my life",
            'email'=>"superadmin@gmail.com",
            'phone'=>"01817603164",
            'image'=>"041020231696365841-user.jpeg",
            'password'=>Hash::make("123456"),
            'role'=>"super-admin",
        ]);

        User::create([
            'name'=>"Monish Roy",
            'bio'=>"I love my life",
            'email'=>"admin@gmail.com",
            'phone'=>"01817603163",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
            'role'=>"admin",
        ]);
        User::create([
            'name'=>"Ronobir Roy",
            'bio'=>"I love my life",
            'email'=>"roymonish712@gmail.com",
            'phone'=>"01717568377",
            'image'=>"041020231696365922-user.png",
            'password'=>Hash::make("123456"),
            'role'=>"student",
        ]);
        User::create([
            'name'=>"Monish Roy",
            'bio'=>"I love my life",
            'email'=>"librarian@gmail.com",
            'phone'=>"01580487212",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
            'role'=>"librarian",
        ]);
        User::create([
            'name'=>"Emdadul Hock",
            'bio'=>"I love my life",
            'email'=>"emdadulhaque1995@gmail.com",
            'phone'=>"01750403009",
            'image'=>rand(1, 5).'.png',
            'password'=>Hash::make("123456"),
            'role'=>"teacher",
        ]);
    }
}
