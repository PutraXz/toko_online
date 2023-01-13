<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
Use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'name' => 'admin test',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('test'),
            'remember_token' => Str::random(50),
        ],
        [
            'name' => 'pimpinan',
            'level' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('test'),
            'remember_token' => Str::random(50),
        ]];
        foreach($users as $user ){
            User::create($user);
        }
    }
}
