<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'download' => 0,
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'download' => 0,
            'password' => bcrypt('user')
        ]);
    }
}
