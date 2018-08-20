<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usamos Eloquent para poblar la tabla
        User::create([
            'name' => 'sergio',
            'email' => 'sergio@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 0,
        ]);

        User::create([
            'name' => 'rocio',
            'email' => 'rocio@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 1,
        ]);

        User::create([
            'name' => 'brisa',
            'email' => 'brisa@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 2,
        ]);

        User::create([
            'name' => 'ramon',
            'email' => 'ramon@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 2,
        ]);
    }
}
